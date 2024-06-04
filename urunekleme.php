<?php
include "baglanti.php";

// İşlem sonucu mesajları için değişkenler
$mesaj = "";

// Form gönderimi işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Formdan gelen verileri al
  $urun_ad = trim($_POST["urun_ad"]);
  $kategori_id = trim($_POST["kategori_id"]);
  $urun_fiyat = trim($_POST["urun_fiyat"]);
  $urun_stok = trim($_POST["urun_stok"]); // Yeni eklendi


  // Resim dosyasını kontrol et
  if (isset($_FILES["urun_resim"]) && $_FILES["urun_resim"]["error"] == 0) {
    // Resim yüklemeyi işle
    $urun_resim_data = file_get_contents($_FILES["urun_resim"]["tmp_name"]);

    // Resim verisini başarılı bir şekilde okunduğundan emin ol
    if ($urun_resim_data !== false) {
      // Yeni ürün eklemek için SQL sorgusu
      $sql = "INSERT INTO uruntablo (urun_ad, kategori_id, urun_fiyat, urun_resim_data, urun_stok)
                    VALUES (?, ?, ?, CONVERT(varbinary(max), ?), ?)";

      // Sorguyu hazırla
      $stmt = sqlsrv_prepare($conn, $sql, array(&$urun_ad, &$kategori_id, &$urun_fiyat, &$urun_resim_data, &$urun_stok));

      // Sorguyu çalıştır
      $result = sqlsrv_execute($stmt);

      // İşlem sonucuna göre mesaj oluştur
      if ($result) {
        $mesaj = "Ürün başarıyla eklendi.";
      } else {
        $mesaj = "Ürün eklenirken bir hata oluştu.";
      }
    }
  } else {
    // Resim dosyası yüklenmediğinde hata mesajı oluştur
    $mesaj = "Lütfen bir resim dosyası seçin.";
  }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yönetici Paneli</title>
  <style>
    #urunGoruntuleButton {
      display: block;
      margin-top: 20px;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
<h2>Yeni Ürün Ekle</h2>
<!-- İşlem sonucunu göstermek için mesaj bölümü -->
<?php if (!empty($mesaj)) : ?>
  <p><?php echo $mesaj; ?></p>
<?php endif; ?>

<form action="urunekleme.php" method="post" enctype="multipart/form-data">
  <label for="urun_ad">Ürün Adı:</label>
  <input type="text" name="urun_ad" required><br>

  <label for="kategori_id">Kategori ID:</label>
  <input type="text" name="kategori_id" required><br>

  <label for="urun_fiyat">Ürün Fiyatı:</label>
  <input type="text" name="urun_fiyat" required><br>

  <!-- Yeni eklenen alan -->
  <label for="urun_stok">Ürün Stok Miktarı:</label>
  <input type="text" name="urun_stok" required><br>

  <label for="urun_resim">Ürün Resmi:</label>
  <input type="file" name="urun_resim" accept="image/*"><br>
  <input type="submit" value="Ürün Ekle">
</form>
</body>
</html>
