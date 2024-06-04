<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Ekleme Formu</title>
</head>
<body>
<div class="col-md-3">
    <div class="card alert">
        <div class="card-header pr">
            <h4>Yeni Ürün Ekle</h4>
        </div>
        <form class="form-horizontal" method="POST" action="#" enctype="multipart/form-data">
            <div class="form-group">
                <label>ÜRÜN ADI</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="urun_ad" placeholder="Ürün Adı">
                </div>
            </div>
            <div class="form-group">
                <label>ÜRÜN KATEGORİSİ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kategori_id" placeholder="Kategori adı">
                </div>
            </div>
            <div class="form-group">
                <label>ÜRÜN FİYAT</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="urun_fiyat" placeholder="Ürün Fiyatı">
                </div>
            </div>
            <div class="form-group">
                <label>STOK ADET</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="urun_stok" placeholder="Stok Adeti">
                </div>
            </div>
            <div class="form-group">
                <label>ÜRÜN DETAY</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="urun_detay" placeholder="Ürün detay">
                </div>
            </div>
            <div class="form-group">
                <label>ÜRÜN RESİM</label>
                <div class="col-sm-10">
                    <div class="form-control file-input dark-browse-input-box">
                        <label for="inputFile-2">
                            <span class="btn btn-danger dark-input-button">
                                <input type="file" id="inputFile-2" name="urun_resim" onchange="this.parentNode.parentNode.nextElementSibling.value = this.value">
                                <i class="fa fa-file-archive-o"></i>
                            </span>
                        </label>
                        <input class="file-name input-flat" type="text" readonly="readonly" placeholder="Browse Files">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="ekle">Ürün Ekle</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
// Veritabanı bağlantısı
include "baglanti.php";

// İşlem sonucu mesajları için değişken
$mesaj = "";

// Form gönderimi işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $urun_ad = $_POST["urun_ad"];
    $kategori_id = $_POST["kategori_id"];
    $urun_fiyat = $_POST["urun_fiyat"];     
    $urun_stok = $_POST["urun_stok"];
    $urun_detay = $_POST["urun_detay"];

    // Resim dosyasını kontrol et
    if (isset($_FILES["urun_resim"]) && $_FILES["urun_resim"]["error"] == 0) {
        // Resim yüklemeyi işle
        $urun_resim_data = file_get_contents($_FILES["urun_resim"]["tmp_name"]);

        // Resim verisini başarılı bir şekilde okunduğundan emin ol
        if ($urun_resim_data !== false) {
            // Yeni ürün eklemek için SQL sorgusu
            $sql = "INSERT INTO uruntablo (urun_ad, kategori_id, urun_fiyat, urun_resim_data, urun_stok, urun_detay)
                    VALUES (?, ?, ?, CONVERT(varbinary(max), ?), ?, ?)";

            // Sorguyu hazırla
            $stmt = sqlsrv_prepare($conn, $sql, array(&$urun_ad, &$kategori_id, &$urun_fiyat, &$urun_resim_data, &$urun_stok, &$urun_detay));

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
</body>
</html>
