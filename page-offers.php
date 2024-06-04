<!DOCTYPE html>
<html lang="en">
<?php
include 'head.php';
?>

<body>

<!-- Body Wrapper -->
<div id="body-wrapper" class="animsition">

    <!-- Header -->
  <?php
  include "header.php";
  ?>
    <!-- Header / End -->

    <!-- Content -->
    <div id="content">

        <!-- Page Title -->
        <div class="page-title bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-4">
                        <h1 class="mb-0">Özel teklifler</h1>
                       <!-- <h4 class="text-muted mb-0">Some informations about our restaurant</h4>-->
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="page-content bg-light">
            <div class="container">
                <!-- Special Offer -->
                <div class="special-offer mb-5 animated" data-animation="fadeIn">
                    <img src="http://assets.suelo.pl/soup/img/photos/special-burger.jpg" alt="" class="special-offer-image">
                    <div class="special-offer-content">
                        <h2 class="mb-2">Bedava Burger</h2>
                        <h5 class="text-muted mb-5">10. siparişinizde siparşinize ek hamburger menü hediye</h5>
                        <ul class="list-check text-lg mb-0">
                            <li>sadece yemek siparişlerinde geçerli</li>
                            <li class="false">Hamburger siparişiniz olmadığı müddetçe</li>
                            <!--<li>Unless one burger ordered</li>-->
                        </ul>
                    </div>
                </div>
                <!-- Special Offer -->
                <div class="special-offer mb-5 animated" data-animation="fadeIn">
                    <img src="http://assets.suelo.pl/soup/img/photos/special-pizza.jpg" alt="" class="special-offer-image">
                    <div class="special-offer-content">
                        <h2 class="mb-2">Ücretsiz küçük Pizza</h2>
                        <h5 class="text-muted mb-5">10. siparişinizde siparşinize ek pizza hediye</h5>
                        <ul class="list-check text-lg mb-0">
                            <li>Sadece Hafta Sonları</li>
                            <li class="false">Sepet tutarı 100 ₺ üstünde olmalıdır</li>
                        </ul>
                    </div>
                </div>
                <!-- Special Offer -->
                <div class="special-offer mb-5 animated" data-animation="fadeIn">
                    <img src="http://assets.suelo.pl/soup/img/photos/special-dish.jpg" alt="" class="special-offer-image">
                    <div class="special-offer-content">
                        <h2 class="mb-2">Kazandıran Cuma</h2>
                        <h5 class="text-muted mb-5">Cuma günleri tüm indirimlere ekv % 10 indirim</h5>
                        <ul class="list-check text-lg mb-0">
                            <li>Sadece Cuma Günü</li>
                            <li>Tüm ürünler</li>
                            <li> yalnızca online siparişlerde geçerli</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
      <?php
      include "footer.php";
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
