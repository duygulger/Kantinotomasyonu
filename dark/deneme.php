<?php
include "baglanti.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {

$urun_id = isset($_POST["urun_id"]) ? $_POST["urun_id"] : '';
$urun_ad = isset($_POST["urun_ad"]) ? $_POST["urun_ad"] : '';
$urun_fiyat = isset($_POST["urun_fiyat"]) ? $_POST["urun_fiyat"] : '';
$urun_stok = isset($_POST["urun_stok"]) ? $_POST["urun_stok"] : ''; // Burada $POST yerine $_POST kullanmalısınız
// Yeni resim yüklenmişse
if ($_FILES["urun_resim"]["size"] > 0) {
$urun_resim_data = file_get_contents($_FILES["urun_resim"]["tmp_name"]);
$sql = "UPDATE uruntablo SET urun_ad = ?, urun_fiyat = ?, urun_stok = ?, urun_resim_data = CONVERT(varbinary(max), ?) WHERE urun_id = ?";
$params = array($urun_ad, $urun_fiyat, $urun_stok, $urun_resim_data, $urun_id);
} else {
// Yeni resim yüklenmemişse, sadece ad, fiyat ve stok güncellenir
$sql = "UPDATE uruntablo SET urun_ad = ?, urun_fiyat = ?, urun_stok = ? WHERE urun_id = ?";
$params = array($urun_ad, $urun_fiyat, $urun_stok, $urun_id);
}

// Sorguyu çalıştır
$query = sqlsrv_query($conn, $sql, $params);

// Sorgu başarılıysa veya değilse uygun mesajı ekrana yazdır
if ($query === false) {
echo "Ürün güncelleme hatası: " . print_r(sqlsrv_errors(), true);
} else {
echo "Ürün güncelleme başarılı!";
}

if ($query) {
// Güncelleme işlemi başarılı olduğunda sayfayı yenile
echo '<meta http-equiv="refresh" content="0">';
exit();
} else {
echo '<script>alert("Ürün güncelleme işlemi başarısız oldu.");</script>';
}
}

// Silme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $urun_id = isset($_POST["urun_id"]) ? $_POST["urun_id"] : '';

    $sql = "DELETE FROM uruntablo WHERE urun_id = ?";
    $params = array($urun_id);
    $query = sqlsrv_query($conn, $sql, $params);

    if ($query) {
        // Silme işlemi başarılı olduğunda sayfayı yenile
        echo '<meta http-equiv="refresh" content="0">';
        exit();
    } else {
        echo '<script>alert("Ürün silme işlemi başarısız oldu.");</script>';
    }
}

$sql = "SELECT * FROM uruntablo";
$stmt = sqlsrv_query($conn, $sql);
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<?php include "head.php"; ?>
<?php include "sidebar.php"; ?>
<?php include "header.php"; ?>
<head>
    <style>
        input[type="text"] {
            color: #000000; /* Silik metin rengi */
        }
        .sag-sifirlama {
            margin-right: 0;
            padding-right: 0;
        }
        #dosyaSecilmemis {
            display: none; /* Başlangıçta gizlenmiş */
        }

    </style>
</head>
<body>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Product List</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <div id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card alert">
                            <div class="card-header pr">
                                <h4>All Products </h4>
                                <div class="search-action">
                                    <!-- Arama giriş alanları buraya gelecek -->
                                </div>
                                <div class="card-header-right-icon">
                                    <!-- Kart başlık simgeleri buraya gelecek -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table product-data-table m-t-20">
                                        <thead>
                                        <tr>
                                            <th>Urun ID</th>
                                            <th>Kategori ID</th>
                                            <th>Urun Adı</th>
                                            <th>Fiyat</th>
                                            <th>Stok Miktarı</th>
                                            <th>Resim</th>
                                            <th>Aksiyon</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['urun_id'] . "</td>";
                                            echo "<td>" . $row['kategori_id'] . "</td>";
                                            echo "<td>" . $row['urun_ad'] . "</td>";
                                            echo "<td>" . $row['urun_fiyat'] . "</td>";
                                            echo "<td>" . $row['urun_stok'] . "</td>";
                                            echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['urun_resim_data']) . "' alt='Product Image' width='100' height='100'></td>";
                                            // Güncelleme ve Silme İşlemleri için form düğmelerini ekleyelim ve data-urun-id ile ürün id'sini saklayalım
                                            echo "<td>
                                                    <form method='post' action='".$_SERVER['PHP_SELF']."' enctype='multipart/form-data'>
                                                        <input type='hidden' name='urun_id' value='".$row['urun_id']."'>
                                                        <input type='text' name='urun_ad' value='".$row['urun_ad']."'><br>
                                                        <input type='text' name='urun_fiyat' value='".$row['urun_fiyat']."' ><br>
                                                         <input type='text' name='urun_stok' value='".$row['urun_stok']."' ><br>
                                                  </td>";
                                            echo"<td>
                                                    <input type='file' name='urun_resim' accept='image/*' >
                                                    <button type='submit' name='update' class='btn btn-primary btn-sm'>Güncelle</button>
                                                    </form>
                                                    <form method='post' action='" . $_SERVER['PHP_SELF'] . "' onsubmit='return confirm(\"Bu ürünü silmek istediğinizden emin misiniz?\")'>
                                                        <input type='hidden' name='urun_id' value='" . $row['urun_id'] . "'>
                                                        <button type='submit' name='delete' class='btn btn-danger btn-sm'><i class='ti-trash'></i> Sil</button>
                                                    </form>
                                                </td>";
                                            echo "</tr>";
                                            echo "<tr>";



                                            echo "</tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<script src="assets/js/lib/bootstrap.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/lib/mmc-common.js"></script>
<script src="assets/js/lib/mmc-chat.js"></script>
<script src="assets/js/lib/rating1/jRate.min.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/rating1/jRate.init.js"></script>
<!-- scripit init-->
<script src="assets/js/scripts.js"></script>
<!-- scripit init-->
</body>
</html>
