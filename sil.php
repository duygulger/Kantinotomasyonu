<?php

$serverName = "DUYGU\SQLEXPRESS";
$connectionOptions = array(
  "Database" => "kampuskantin",
  "Uid" => "", // SQL Server kullanıcı adınızı buraya girin
  "PWD" => "", // SQL Server şifrenizi buraya girin
);

$conn = sqlsrv_connect($serverName, $connectionOptions);
if (!$conn) {
  die("Bağlantı başarısız: " . print_r(sqlsrv_errors(), true));
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
  $urun_id = $_POST["urun_id"];
  $sql = "DELETE FROM uruntablo WHERE urun_id = ?";
  $params = array($urun_id);
  $query = sqlsrv_query($conn, $sql, $params);

  if ($query) {
    echo "Ürün silme başarılı!";
  } else {
    echo "Ürün silme hatası: " . print_r(sqlsrv_errors(), true);
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
    // Silme formu için düzenleme
    echo '<form method="post">';
    echo '<input type="hidden" name="urun_id" value="' . $row["urun_id"] . '">';
    echo '<input type="submit" name="delete" value="Sil" onclick="return confirm(\'Bu ürünü silmek istediğinizden emin misiniz?\')">';
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

    input[type="submit"] {
      background-color: #FF5733; /*
