<?php
include 'baglanti.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $urun_id = $_POST["urun_id"];
  $urun_ad = $_POST["urun_ad"];
  $urun_fiyat = $_POST["urun_fiyat"];

  // Yeni resim yüklenmişse
  if ($_FILES["urun_resim"]["size"] > 0) {
    $urun_resim_data = file_get_contents($_FILES["urun_resim"]["tmp_name"]);

    $sql = "UPDATE uruntablo SET urun_ad = ?, urun_fiyat = ?, urun_resim_data = CONVERT(varbinary(max), ?) WHERE urun_id = ?";
    $params = array($urun_ad, $urun_fiyat, $urun_resim_data, $urun_id);
  } else {
    // Yeni resim yüklenmemişse
    $sql = "UPDATE uruntablo SET urun_ad = ?, urun_fiyat = ? WHERE urun_id = ?";
    $params = array($urun_ad, $urun_fiyat, $urun_id);
  }

  $query = sqlsrv_query($conn, $sql, $params);

  if ($query) {
    echo "Ürün güncelleme başarılı!";
  } else {
    echo "Ürün güncelleme hatası: " . print_r(sqlsrv_errors(), true);
  }
}

$sql = "SELECT urun_id, urun_ad, urun_fiyat, CONVERT(varchar(max), urun_resim_data) as urun_resim_data FROM uruntablo";
$query = sqlsrv_query($conn, $sql);

if ($query) {
  while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
    echo "<div>";
    echo "<h2>" . $row["urun_ad"] . "</h2>";
    echo "<p>Fiyat: " . number_format($row["urun_fiyat"], 2) . " TL</p>";
    echo '<img src="data:image/jpeg;base64,' . base64_encode($row["urun_resim_data"]) . '" alt="Ürün Resmi" width="100" height="100">';
    // Ürün güncelleme formu için düzenleme
    echo '<form method="post" enctype="multipart/form-data">';
    echo '<input type="hidden" name="urun_id" value="' . $row["urun_id"] . '">';
    echo '<label for="urun_ad">Ürün Adı:</label>';
    echo '<input type="text" name="urun_ad" value="' . $row["urun_ad"] . '"><br>';
    echo '<label for="urun_fiyat">Fiyat:</label>';
    echo '<input type="text" name="urun_fiyat" value="' . $row["urun_fiyat"] . '"><br>';
    echo '<label for="urun_resim">Resim:</label>';
    echo '<input type="file" name="urun_resim"><br>';
    echo '<input type="submit" value="Güncelle">';
    echo '</form>';
    echo "</div>";
  }
} else {
  echo "Sorgu hatası: " . print_r(sqlsrv_errors(), true);
}

// Bağlantıyı kapat
sqlsrv_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ürünler</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4; /* Arka plan rengi */
      margin: 0;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    div {
      border: 1px solid #ccc; /* Çerçeve rengi */
      padding: 10px;
      margin: 10px;
      background-color: #fff; /* İçerik arka plan rengi */
      width: 300px;
    }

    h2 {
      color: #333; /* Başlık rengi */
    }

    p {
      color: #555; /* Metin rengi */
    }

    img {
      margin-top: 10px;
      max-width: 100%;
      height: auto;
      display: block;
    }

    form {
      margin-top: 10px;
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 5px;
    }

    input[type="text"], input[type="file"] {
      padding: 5px;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #4CAF50; /* Yeşil renkli düğme */
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049; /* Hovver efekti */
    }
  </style>
</head>
<body>


</body>
</html>
