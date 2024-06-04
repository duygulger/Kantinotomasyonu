<!DOCTYPE html>
<html lang="en">
<?php
include 'head.php';
?>

<style>
  .image-container {
    width: 200px; /* İstenen genişlik değeri */
    height: 200px; /* İstenen yükseklik değeri */
    overflow: hidden;
  }

  .image-container img {
    width: 100%;
    height: 100%;
    object-fit: fill; /* Resmi konteyner içinde sıkıştırma */
    /*
    Eğer farklı bir sıkıştırma istiyorsan burayı kullan
    object-fit: contain; Resmi konteyner içinde sıkıştırma
    */
  }
</style>
<body>

<!-- Body Wrapper -->
<div id="body-wrapper" class="animsition">

  <!-- Header -->
  <?php
  include 'header.php'
  ?>
  <!-- Header / End -->

  <!-- Content -->
  <div id="content">

    <!-- Page Title -->
    <div class="page-title bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-4">
            <h1 class="mb-0">Menu Grid</h1>
            <h4 class="text-muted mb-0">Some informations about our restaurant</h4>
          </div>
        </div>
      </div>
    </div>

    <!-- Page Content -->
    <div class="page-content">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-10 offset-md-1" role="tablist">
            <!-- Menu Category / Burgers -->
            <div id="Burgers" class="menu-category">
              <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuBurgersContent" data-toggle="collapse" aria-expanded="true">
                <div class="bg-image"><img src="https://media.istockphoto.com/id/504333530/tr/foto%C4%9Fraf/many-cups-of-coffee-on-wooden-table.jpg?s=612x612&w=0&k=20&c=LZBOCUA7VGuyQEv92QokdbfpfCQ3La4Oj8iA466_AXg=" alt=""></div>
                <h2 class="title">Sıcak İçecekler</h2>
              </div>
              <div id="menuBurgersContent" class="menu-category-content collapse show">
                <div class="p-4">
                  <div class="row gutters-sm">

                    <?php
                    $sql = "SELECT urun_id, urun_ad, urun_fiyat, urun_resim_data, urun_stok FROM uruntablo WHERE kategori_id=1";
                    $result = sqlsrv_query($conn, $sql);

                    if ($result === false) {
                      die(print_r(sqlsrv_errors(), true));
                    }

                    if (sqlsrv_has_rows($result)) {
                      while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        $productId = $row["urun_id"];
                        $productName = $row["urun_ad"];
                        $productPrice = $row["urun_fiyat"];
                        $productStok = $row["urun_stok"];
                        $productImage = $row["urun_resim_data"];

                        echo '<div class="col-lg-4 col-6">';
                        echo '<div class="menu-item menu-grid-item">';
                        echo '<div class="image-container">';
                        echo '<img class="mb-4" src="data:image/jpeg;base64,' . base64_encode($productImage) . '" alt="' . $productName . '">';
                        echo '</div>';
                        echo '<br><h6 class="mb-0">' . $productName . '</h6><br>';

                        echo '<div class="row align-items-center mt-4">';
                        echo '<div class="col-sm-6"><span class="text-md mr-4">' . $productPrice . '₺</span></div>';

                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                      }
                    } else {
                      echo "Hiç ürün bulunamadı.";
                    }
                    ?>



                  </div>
                </div>
              </div>
            </div>
            <!-- Menu Category / Pasta -->
            <div id="Pasta" class="menu-category">
              <div class="menu-category-title collapse-toggle collapsed" role="tab" data-target="#menuPastaContent" data-toggle="collapse" aria-expanded="false">
                <div class="bg-image"><img src="https://gastronomidergisi.com/images/haber/kahve%20dunyasi9067.jpg" alt=""></div>
                <h2 class="title">Soğuk İçecekler</h2>
              </div>
              <div id="menuPastaContent" class="menu-category-content collapse">
                <div class="p-4">
                  <div class="row gutters-sm">
                    <?php
                    $sql = "SELECT urun_id, urun_ad, urun_fiyat, urun_resim_data, urun_stok FROM uruntablo WHERE kategori_id=2";
                    $result = sqlsrv_query($conn, $sql);

                    if ($result === false) {
                      die(print_r(sqlsrv_errors(), true));
                    }

                    if (sqlsrv_has_rows($result)) {
                      while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        $productId = $row["urun_id"];
                        $productName = $row["urun_ad"];
                        $productPrice = $row["urun_fiyat"];
                        $productStok = $row["urun_stok"];
                        $productImage = $row["urun_resim_data"];

                        echo '<div class="col-lg-4 col-6">';
                        echo '<div class="menu-item menu-grid-item">';
                        echo '<div class="image-container">';
                        echo '<img class="mb-4" src="data:image/jpeg;base64,' . base64_encode($productImage) . '" alt="' . $productName . '">';
                        echo '</div>';
                        echo '<br><h6 class="mb-0">' . $productName . '</h6><br>';

                        echo '<div class="row align-items-center mt-4">';
                        echo '<div class="col-sm-6"><span class="text-md mr-4">' . $productPrice . '₺</span></div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                      }
                    } else {
                      echo "Hiç ürün bulunamadı.";
                    }
                    ?>


                  </div>
                </div>
              </div>
            </div>
            <!-- Menu Category / Pizza -->
            <div id="Pizza" class="menu-category">
              <div class="menu-category-title collapse-toggle collapsed" role="tab" data-target="#menuPizzaContent" data-toggle="collapse" aria-expanded="false">
                <div class="bg-image"><img src="https://st4.depositphotos.com/1022828/23496/i/450/depositphotos_234968104-stock-photo-collection-set-desserts-isolated-white.jpg" alt=""></div>
                <h2 class="title">Tatlılar</h2>
              </div>
              <div id="menuPizzaContent" class="menu-category-content collapse">
                <div class="p-4">
                  <div class="row gutters-sm">
                    <?php
                    $sql = "SELECT urun_id, urun_ad, urun_fiyat, urun_resim_data, urun_stok FROM uruntablo WHERE kategori_id=3";
                    $result = sqlsrv_query($conn, $sql);

                    if ($result === false) {
                      die(print_r(sqlsrv_errors(), true));
                    }

                    if (sqlsrv_has_rows($result)) {
                      while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        $productId = $row["urun_id"];
                        $productName = $row["urun_ad"];
                        $productPrice = $row["urun_fiyat"];
                        $productStok = $row["urun_stok"];
                        $productImage = $row["urun_resim_data"];

                        echo '<div class="col-lg-4 col-6">';
                        echo '<div class="menu-item menu-grid-item">';
                        echo '<div class="image-container">';
                        echo '<img class="mb-4" src="data:image/jpeg;base64,' . base64_encode($productImage) . '" alt="' . $productName . '">';
                        echo '</div>';
                        echo '<br><h6 class="mb-0">' . $productName . '</h6><br>';

                        echo '<div class="row align-items-center mt-4">';
                        echo '<div class="col-sm-6"><span class="text-md mr-4">' . $productPrice . '₺</span></div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                      }
                    } else {
                      echo "Hiç ürün bulunamadı.";
                    }
                    ?>

                  </div>
                </div>
              </div>
            </div>
            <!-- Menu Category / Sushi -->
            <div id="Sushi" class="menu-category">
              <div class="menu-category-title collapse-toggle collapsed" role="tab" data-target="#menuSushiContent" data-toggle="collapse" aria-expanded="false">
                <div class="bg-image"><img src="https://cdn.ye-mek.net/App_UI/Img/out/650/2014/09/makarna-soslariyla-lezzetli-makarna-yapma-sanati-resimli-yemek-tarifi.jpg" alt=""></div>
                <h2 class="title">Makarnalar</h2>
              </div>
              <div id="menuSushiContent" class="menu-category-content collapse">
                <div class="p-4">
                  <div class="row gutters-sm">
                    <?php
                    $sql = "SELECT urun_id, urun_ad, urun_fiyat, urun_resim_data, urun_stok FROM uruntablo WHERE kategori_id=4";
                    $result = sqlsrv_query($conn, $sql);

                    if ($result === false) {
                      die(print_r(sqlsrv_errors(), true));
                    }

                    if (sqlsrv_has_rows($result)) {
                      while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        $productId = $row["urun_id"];
                        $productName = $row["urun_ad"];
                        $productPrice = $row["urun_fiyat"];
                        $productStok = $row["urun_stok"];
                        $productImage = $row["urun_resim_data"];

                        echo '<div class="col-lg-4 col-6">';
                        echo '<div class="menu-item menu-grid-item">';
                        echo '<div class="image-container">';
                        echo '<img class="mb-4" src="data:image/jpeg;base64,' . base64_encode($productImage) . '" alt="' . $productName . '">';
                        echo '</div>';
                        echo '<br><h6 class="mb-0">' . $productName . '</h6><br>';
                        echo '<div class="row align-items-center mt-4">';
                        echo '<div class="col-sm-6"><span class="text-md mr-4">' . $productPrice . '₺</span></div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                      }
                    } else {
                      echo "Hiç ürün bulunamadı.";
                    }
                    ?>


                  </div>
                </div>
              </div>
            </div>
            <!-- Menu Category / Desserts -->
            <div id="Desserts" class="menu-category">
              <div class="menu-category-title collapse-toggle collapsed" role="tab" data-target="#menuDessertsContent" data-toggle="collapse" aria-expanded="false">
                <div class="bg-image"><img src="https://www.shutterstock.com/shutterstock/photos/2353214487/display_1500/stock-photo-all-fast-food-collection-set-isolated-on-white-background-fried-chicken-fries-pizza-sandwich-2353214487.jpg" alt=""></div>
                <h2 class="title">Fast-Food</h2>
              </div>
              <div id="menuDessertsContent" class="menu-category-content collapse">
                <div class="p-4">
                  <div class="row gutters-sm">
                    <?php
                    $sql = "SELECT urun_id, urun_ad, urun_fiyat, urun_resim_data, urun_stok FROM uruntablo WHERE kategori_id=5";
                    $result = sqlsrv_query($conn, $sql);

                    if ($result === false) {
                      die(print_r(sqlsrv_errors(), true));
                    }

                    if (sqlsrv_has_rows($result)) {
                      while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        $productId = $row["urun_id"];
                        $productName = $row["urun_ad"];
                        $productPrice = $row["urun_fiyat"];
                        $productStok = $row["urun_stok"];
                        $productImage = $row["urun_resim_data"];

                        echo '<div class="col-lg-4 col-6">';
                        echo '<div class="menu-item menu-grid-item">';
                        echo '<div class="image-container">';
                        echo '<img class="mb-4" src="data:image/jpeg;base64,' . base64_encode($productImage) . '" alt="' . $productName . '">';
                        echo '</div>';
                        echo '<br><h6 class="mb-0">' . $productName . '</h6><br>';

                        echo '<div class="row align-items-center mt-4">';
                        echo '<div class="col-sm-6"><span class="text-md mr-4">' . $productPrice . '₺</span></div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                      }
                    } else {
                      echo "Hiç ürün bulunamadı.";
                    }
                    ?>


                  </div>
                </div>
              </div>
            </div>
            <!-- Menu Category / Drinks -->
            <div id="Drinks" class="menu-category">
              <div class="menu-category-title collapse-toggle collapsed" role="tab" data-target="#menuDrinksContent" data-toggle="collapse" aria-expanded="false">
                <div class="bg-image"><img src="https://cdn.ye-mek.net/App_UI/Img/out/650/2016/06/tavada-pratik-tavuk-yemekleri-resimli-yemek-tarifi.jpg" alt=""></div>
                <h2 class="title">Tavuklu Menüler</h2>
              </div>
              <div id="menuDrinksContent" class="menu-category-content collapse">
                <div class="p-4">
                  <div class="row gutters-sm">
                    <?php
                    $sql = "SELECT urun_id, urun_ad, urun_fiyat, urun_resim_data, urun_stok FROM uruntablo WHERE kategori_id=6";
                    $result = sqlsrv_query($conn, $sql);

                    if ($result === false) {
                      die(print_r(sqlsrv_errors(), true));
                    }

                    if (sqlsrv_has_rows($result)) {
                      while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        $productId = $row["urun_id"];
                        $productName = $row["urun_ad"];
                        $productPrice = $row["urun_fiyat"];
                        $productStok = $row["urun_stok"];
                        $productImage = $row["urun_resim_data"];

                        echo '<div class="col-lg-4 col-6">';
                        echo '<div class="menu-item menu-grid-item">';
                        echo '<div class="image-container">';
                        echo '<img class="mb-4" src="data:image/jpeg;base64,' . base64_encode($productImage) . '" alt="' . $productName . '">';
                        echo '</div>';
                        echo '<br><h6 class="mb-0">' . $productName . '</h6><br>';

                        echo '<div class="row align-items-center mt-4">';
                        echo '<div class="col-sm-6"><span class="text-md mr-4">' . $productPrice . '₺</span></div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                      }
                    } else {
                      echo "Hiç ürün bulunamadı.";
                    }
                    ?>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>

    <!-- Footer / End -->



  </div>
  <!-- Content / End -->

  <!-- Panel Cart -->
  <?php
  include "sepet.php";
  ?>
  <!-- Panel Mobile -->
  <nav id="panel-mobile">
    <div class="module module-logo bg-dark dark">
      <a href="#">
        <img src="assets/img/logo-light.svg" alt="" width="88">
      </a>
      <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
    </div>
    <nav class="module module-navigation"></nav>
    <div class="module module-social">
      <h6 class="text-sm mb-3">Follow Us!</h6>
      <a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>
      <a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>
      <a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>
    </div>
  </nav>

  <!-- Body Overlay -->
  <div id="body-overlay"></div>

</div>

<!-- Modal / Product -->
<div class="modal fade product-modal" id="product-modal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header-lg dark bg-dark">
        <div class="bg-image"><img src="http://assets.suelo.pl/soup/img/photos/modal-add.jpg" alt=""></div>
        <h4 class="modal-title">Specify your dish</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti ti-close"></i></button>
      </div>
      <div class="modal-product-details">
        <div class="row align-items-center">
          <div class="col-9">
            <h6 class="mb-1 product-modal-name">Boscaiola Pasta</h6>
            <span class="text-muted product-modal-ingredients">Pasta, Cheese, Tomatoes, Olives</span>
          </div>
          <div class="col-3 text-lg text-right">$<span class="product-modal-price"></span></div>
        </div>
      </div>
      <div class="modal-body panel-details-container">
        <!-- Panel Details / Size -->
        <!-- Panel Details / Size -->

        <?php
        include "Panel Details_Size.php";
        ?>

        <!-- Panel Details / Additions -->

        <?php
        include "Panel Details_Additions.php";
        ?>
        <!-- Panel Details / Other -->
        <?php
        include "Panel Details_Other.php";
        ?>

      </div>
      <button type="button" class="modal-btn btn btn-secondary btn-block btn-lg" data-action="add-to-cart"><span>Add to Cart</span></button>
      <button type="button" class="modal-btn btn btn-secondary btn-block btn-lg" data-action="update-cart"><span>Update</span></button>
    </div>
  </div>
</div>

<!-- Cookies Bar -->
<div id="cookies-bar" class="body-bar cookies-bar">
  <div class="body-bar-container container">
    <div class="body-bar-text">
      <h4 class="mb-2">Cookies & GDPR</h4>
      <p>This is a sample Cookies / GDPR information. You can use it easily on your site and even add link to <a href="#">Privacy Policy</a>.</p>
    </div>
    <div class="body-bar-action">
      <button class="btn btn-primary" data-accept="cookies"><span>Accept</span></button>
    </div>
  </div>
</div>

<!-- JS Core -->
<script src="dist/js/core.js"></script>


</body>

</html>
