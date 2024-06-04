<?php
include "baglanti.php";

// SQL sorgusu
$sql = "SELECT u.urun_id, u.urun_ad, u.urun_fiyat, u.urun_resim_data, k.ad, s.adet
        FROM uruntablo u
        JOIN kategoritablo k ON u.kategori_id = k.kategori_id
        LEFT JOIN urunstoktablo s ON u.urun_id = s.urun_id"; // Ürünlerin stok miktarını eklemek için LEFT JOIN kullanılıyor

// Sorguyu çalıştır
$query = sqlsrv_query($conn, $sql);

// Verileri göster
if ($query) {
  while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
    echo "<div>";
    echo "<h2>" . $row["urun_ad"] . "</h2>";
    echo "<p>Fiyat: " . number_format($row["urun_fiyat"], 2) . " TL</p>";
    echo "<p>Kategori: " . $row["ad"] . "</p>";
    if ($row["adet"] !== null) { // Stok miktarı varsa göster
      echo "<p>Stok Miktarı: " . $row["adet"] . "</p>";
    } else { // Stok miktarı yoksa "Bilgi Yok" mesajını gösterme
      echo "<p>Stok Miktarı: Bilgi Yok</p>";
    }
    echo '<img src="data:image/jpeg;base64,' . base64_encode($row["urun_resim_data"]) . '" alt="Ürün Resmi" width="100" height="100">';
    echo "</div>";
  }

  // Veritabanı bağlantısını kapat
  sqlsrv_close($conn);
} else {
  echo "Sorgu hatası: " . print_r(sqlsrv_errors(), true);
}

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
      background-color: white; /* Arka plan rengi */
    }

    div {
      border: 1px solid #0a0a0a; /* Çerçeve rengi */
      padding: 10px;
      margin: 10px;
      background-color: #f4f4f4; /* İçerik arka plan rengi */
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
  </style>
</head>
<body>
