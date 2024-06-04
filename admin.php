<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yönetici Paneli</title>
  <style>
    .button-container {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .button {
      display: block;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    #urunekleButton {
      background-color: #1c7430; /* Mavi tonları */
      color: white;
    }

    #urunGuncelleButton {
      background-color: #6495ED; /* Mavi tonları */
      color: white;
    }

    #urunSilButton {
      background-color: #FF6347; /* Kırmızı tonları */
      color: white;
    }

    #urunGoruntuleButton {
      background-color: #FF69B4; /* Pembe tonları */
      color: white;
    }

    .button:hover {
      background-color: #ddd; /* Hover efekti için daha açık renk tonu */
    }
  </style>
</head>
<body>
<div class="button-container">
  <a href="urunekleme.php" id="urunekleButton" class="button">Yeni Ürün Ekle</a>
  <a href="guncelleme.php" id="urunGuncelleButton" class="button">Ürün Bilgilerini Güncelle</a>
  <a href="sil.php" id="urunSilButton" class="button">Ürünü Sil</a>
  <a href="urungoruntuleme.php" id="urunGoruntuleButton" class="button">Tüm Ürünleri Görüntüle</a>
</div>
</body>
</html>
