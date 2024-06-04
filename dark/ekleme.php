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
                            <h1>Ürün Bilgileri</h1>
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
            <div id="main-content">
                <div class="row">

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
                                        <button type="submit" name="ekle" class="btn btn-lg btn-primary">Ürün Ekle</button>
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


                       <div class="col-lg-9">
                        <div class="card alert">
                            <div class="card-header pr">
                                <h4>Ürün Listesi</h4>
                                <div class="search-action">
                                    <div class="search-type dib">
                                        <input class="form-control input-rounded" placeholder="search" type="text">
                                    </div>
                                </div>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                        <li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
                                            <ul class="card-option-dropdown dropdown-menu">
                                                <li><a href="deneme.php"><i class="ti-loop"></i>Verileri Güncelle</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                        <tr>
                                            <th><!--<label><input type="checkbox" value="">--></label> ÜRÜN ID</th>
                                            <th>KATEGORİ</th>
                                            <th>ÜRÜN ADI</th>
                                            <th>FİYAT </th>
                                            <th>STOK MİKTARI</th>
                                            <th>RESİM </th>
                                        </tr>
                                        </thead>
                                        <?php
                                        include 'baglanti.php';
                                        $stmt = sqlsrv_query($conn, "SELECT * FROM uruntablo");

                                        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['urun_id'] . "</td>";
                                            echo "<td>" . $row['kategori_id'] . "</td>";
                                            echo "<td>" . $row['urun_ad'] . "</td>";
                                            echo "<td>" . $row['urun_fiyat'] . "</td>";
                                            echo "<td>" . $row['urun_stok'] . "</td>";
                                            echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['urun_resim_data']) . "' alt='Product Image' width='100' height='100'></td>";
                                            echo "</tr>";
                                        }
                                        ?>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
<!--<script src="assets/js/lib/bootstrap.min.js"></script>-->
<!-- bootstrap -->
<script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/calendar-2/semantic.ui.min.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/calendar-2/prism.min.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/calendar-2/pignose.init.js"></script>
<script src="assets/js/scripts.js"></script>
<!-- scripit init-->
</body>
</html>
