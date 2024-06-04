<!DOCTYPE html>
<html lang="en" class="dark">
<?php
include "head.php";
?>
<body>
<?php
include "sidebar.php";
?>

<!-- /# sidebar -->
<?php
include "header.php";
?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                        <!--    <h1>Hello, <span>Welcome Here</span></h1>-->
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li>Ürün ekleme </li>
                                <li class="active">Anasayfa</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card alert">
                            <div class="card-header">
                                <h4>ÜRÜN EKLEME</h4>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                        <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="menu-upload-form">
                                    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">ÜRÜN ADI</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="urun_ad" placeholder="Ürün Adı">
                                            </div>
                                        </div>


                                        <div class="form-group custom-form-group">
                                            <label class="col-sm-2 control-label">ÜRÜN KATEGORİSİ</label>
                                            <div class="col-sm-10">
                                                <select name="kategori_id" data-toggle="dropdown" class="form-control">
                                                    <option value="Sıcak içecekler">Sıcak İçecekler</option>
                                                    <option value="Soğuk içecekler">Soğuk içecekler</option>
                                                    <option value="Tatlılar">Tatlılar</option>
                                                    <option value="Yiyecekler">Yiyecekler</option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">ÜRÜN FİYAT</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="urun_fiyat" placeholder="Ürün Fiyatı">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">STOK ADET</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="urun_stok" placeholder="Stok Adeti">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">ÜRÜN RESİM</label>
                                            <div class="col-sm-10">
                                                <div class="form-control file-input dark-browse-input-box">
                                                    <label for="inputFile-2">
                                                                 <span class="btn btn-danger dark-input-button">
                                                                      <input type="file" id="inputFile-2" name="urun_resim" onchange="this.parentNode.parentNode.nextElementSibling.value = this.value">
                                                                     <i class="fa fa-file-archive-o"></i></span>

                                                    </label>
                                                    <input class="file-name input-flat" type="text" readonly="readonly" placeholder="Browse Files">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" name="ekle" class="btn btn-lg btn-primary">Ürün Ekle</button>
                                            </div>
                                        </div>



                                        <?php
                                        include 'baglanti.php';

                                        // Form gönderimi işle
                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                            // Form verilerini al
                                            $urun_ad = $_POST["urun_ad"];
                                            $kategori_id = $_POST["kategori_id"];
                                            $urun_fiyat = $_POST["urun_fiyat"];
                                            $urun_stok = $_POST["urun_stok"];
                                            // Seçilen kategoriyi kontrol et
                                            if ($kategori_id == "Sıcak içecekler") {
                                                $kategori_id = 1;
                                            } else if ($kategori_id == "Soğuk içecekler") {
                                                $kategori_id = 2;
                                            } else if ($kategori_id == "Tatlılar") {
                                                $kategori_id = 3;
                                            } else if ($kategori_id == "Yiyecekler") {
                                                $kategori_id = 4;
                                            }

                                            // Resim yüklemeyi işle
                                            if ($_FILES['urun_resim']['size'] > 0) {
                                                $urun_resim_data = file_get_contents($_FILES['urun_resim']['tmp_name']);
                                            } else {
                                                $urun_resim_data = null;
                                            }

                                            // Resim verisini başarılı bir şekilde okunduğundan emin ol
                                            if ($urun_resim_data !== false) {
                                                // Yeni ürün eklemek için SQL sorgusu
                                                $sql = "INSERT INTO uruntablo (urun_ad, kategori_id, urun_fiyat, urun_resim_data, urun_stok)VALUES (?, ?, ?, CONVERT(varbinary(max), ?), ?)";

                                                // Sorguyu hazırla
                                                $stmt = sqlsrv_prepare($conn, $sql, array(&$urun_ad, &$kategori_id, &$urun_fiyat, &$urun_resim_data, &$urun_stok));

                                                if ($stmt) {
                                                    // Sorguyu çalıştır
                                                    $result = sqlsrv_execute($stmt);

                                                    if ($result) {
                                                        echo "Ürün başarıyla eklendi!";
                                                    } else {
                                                        echo "Hata: " . print_r(sqlsrv_errors(), true);
                                                    }
                                                } else {
                                                    echo "Sorgu hazırlanırken hata oluştu.";
                                                }
                                            } else {
                                                echo "Resim yüklenirken hata oluştu.";
                                            }
                                        }
                                        // Bağlantıyı kapat
                                        sqlsrv_close($conn);
                                        ?>


                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
            </div>
            <!-- /# main content -->
        </div>
        <!-- /# container-fluid -->
    </div>
    <!-- /# main -->
</div>
<!-- /# content wrap -->

<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<!-- jquery vendor -->
<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="assets/js/lib/menubar/sidebar.js"></script>
<script src="assets/js/lib/preloader/pace.min.js"></script>
<!-- sidebar -->
<script src="assets/js/lib/bootstrap.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/lib/mmc-common.js"></script>
<script src="assets/js/lib/mmc-chat.js"></script>
<script src="assets/js/scripts.js"></script>


</body>
</html>
