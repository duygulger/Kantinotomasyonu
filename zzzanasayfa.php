<?php
// Oturumu başlat
session_start();

// Kullanıcının adı ve soyadını $_SESSION değişkenlerinden alın
$ad = $_SESSION['ad'];
$soyad = $_SESSION['soyad'];

// Eğer kullanıcı oturumu yoksa veya ad/soyad bilgisi boşsa, giriş sayfasına yönlendirin
if (!isset($ad) || !isset($soyad) || empty($ad) || empty($soyad)) {
  header("Location: giris.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ana Sayfa</title>
</head>
<body>
<h1>Hoş geldiniz, <?php echo $ad . " " . $soyad; ?>!</h1>
<!-- Diğer sayfa içeriği buraya eklenebilir -->
</body>
</html>
