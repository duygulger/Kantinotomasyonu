<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
?>
<body>

<!-- Body Wrapper -->
<div id="body-wrapper" class="animsition">
  <?php
  include 'header.php'
  ?>
  <!-- Content -->
  <div id="content">

    <!-- Section - Main -->
    <section class="section section-main section-main-1 bg-light">

      <div class="container dark">
        <div class="slide-container">
          <div id="section-main-1-carousel-image" class="image inner-controls">
            <div class="slide"><div class="bg-image"><img src="http://assets.suelo.pl/soup/img/photos/slider-pasta.jpg" alt=""></div></div>
            <div class="slide"><div class="bg-image"><img src="http://assets.suelo.pl/soup/img/photos/slider-burger.jpg" alt=""></div></div>
            <div class="slide"><div class="bg-image"><img src="http://assets.suelo.pl/soup/img/photos/slider-dessert.jpg" alt=""></div></div>
          </div>
          <div class="content dark">
            <div id="section-main-1-carousel-content">
              <div class="content-inner">
                <h4 class="text-muted">yeni ürün!</h4>
                <h1>Boscaiola makarna</h1>
                <div class="btn-group">
                  <button class="btn btn-outline-primary btn-lg" data-action="open-cart-modal" data-id="1"><span>sepete ekle</span></button>
                  <span class="price price-lg">99TL den başlayan fiyatlarla </span>
                </div>
              </div>
              <div class="content-inner">
                <h1>10% kupon kazan</h1>
                <h5 class="text-muted mb-5">ekle ve bir sonraki siparişinde kullan!</h5>
                <a href="page-offers.php" class="btn btn-outline-primary btn-lg"><span>Şimdi al!</span></a>
              </div>
              <div class="content-inner">
                <h1>Lezzetli tatlılar</h1>
                <h5 class="text-muted mb-5">Şimdi online sipariş verebilirsin!</h5>
                <a href="menu-list-collapse.html" class="btn btn-outline-primary btn-lg"><span>şimdi sipariş et!</span></a>
              </div>
            </div>
            <nav class="content-nav">
              <a class="prev" href="#"><i class="ti ti-arrow-left"></i></a>
              <a class="next" href="#"><i class="ti ti-arrow-right"></i></a>
            </nav>
          </div>
        </div>
      </div>

    </section>

    <!-- Section - About -->
    <section class="section section-bg-edge">

      <div class="image right col-md-6 offset-md-6">
        <div class="bg-image"><img src="http://assets.suelo.pl/soup/img/photos/bg-food.jpg" alt=""></div>
      </div>

      <div class="container">
        <div class="col-lg-5 col-md-9">
          <div class="rate mb-5 rate-lg"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
          <h1>Tokattaki en iyi yemek!</h1>
          <p class="lead text-muted mb-5">Donec a eros metus. Vivamus volutpat leo dictum risus ullamcorper condimentum. Cras sollicitudin varius condimentum. Praesent a dolor sem....</p>
          <div class="blockquotes">
            <!-- Blockquote -->
            <blockquote class="blockquote light animated" data-animation="fadeInLeft">
              <div class="blockquote-content">
                <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                <p>yemeniz için harika bir deneyimdi </p>
              </div>
              <footer>
                <img src="http://assets.suelo.pl/soup/img/avatars/avatar02.jpg" alt="">
                <span class="name">Ademcan İyik<span class="text-muted">, Google</span></span>
              </footer>
            </blockquote>
            <!-- Blockquote -->
            <blockquote class="blockquote animated" data-animation="fadeInRight" data-animation-delay="300">
              <div class="blockquote-content dark">
                <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                <p>çok güzel yemeklere ve atmosfere sahip!</p>
              </div>
              <footer>
                <img src="http://assets.suelo.pl/soup/img/avatars/avatar01.jpg" alt="">
                <span class="name">Duygu ülger<span class="text-muted">, LinkedIn</span></span>
              </footer>
            </blockquote>
          </div>
        </div>
      </div>

    </section>

    <!-- Section - Steps -->
    <section class="section section-extended right dark">

      <div class="container bg-dark">
        <div class="row">
          <div class="col-md-4">
            <!-- Step -->
            <div class="feature feature-1 mb-md-0">
              <div class="feature-icon icon icon-primary"><i class="ti ti-shopping-cart"></i></div>
              <div class="feature-content">
                <h4 class="mb-2"><a href="menu-list-collapse.html">Bir yemek seç</a></h4>
                <p class="text-muted mb-0">Vivamus volutpat leo dictum risus ullamcorper condimentum.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <!-- Step -->
            <div class="feature feature-1 mb-md-0">
              <div class="feature-icon icon icon-primary"><i class="ti ti-wallet"></i></div>
              <div class="feature-content">
                <h4 class="mb-2">ödemesini yap</h4>
                <p class="text-muted mb-0">Vivamus volutpat leo dictum risus ullamcorper condimentum.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <!-- Step -->
            <div class="feature feature-1 mb-md-0">
              <div class="feature-icon icon icon-primary"><i class="ti ti-package"></i></div>
              <div class="feature-content">
                <h4 class="mb-2">Yemeğin sana gelsin</h4>
                <p class="text-muted mb-3">Vivamus volutpat leo dictum risus ullamcorper condimentum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- Section - Menu -->
    <section class="section pb-0 protrude">

      <div class="container">
        <h1 class="mb-6">Menümüz</h1>
      </div>

      <div class="menu-sample-carousel carousel inner-controls" data-slick='{
                "dots": true,
                "slidesToShow": 3,
                "slidesToScroll": 1,
                "infinite": true,
                "responsive": [
                    {
                        "breakpoint": 991,
                        "settings": {
                            "slidesToShow": 2,
                            "slidesToScroll": 1
                        }
                    },
                    {
                        "breakpoint": 690,
                        "settings": {
                            "slidesToShow": 1,
                            "slidesToScroll": 1
                        }
                    }
                ]
            }'>
        <!-- Menu Sample -->
        <div class="menu-sample">
          <a href="menu-list-navigation.html#Burgers">
            <img src="http://assets.suelo.pl/soup/img/photos/menu-sample-burgers.jpg" alt="" class="image">
            <h3 class="title">Hamburgerler</h3>
          </a>
        </div>
        <!-- Menu Sample -->
        <div class="menu-sample">
          <a href="menu-list-navigation.html#Pizza">
            <img src="http://assets.suelo.pl/soup/img/photos/menu-sample-pizza.jpg" alt="" class="image">
            <h3 class="title">Pizzalar</h3>
          </a>
        </div>
        <!-- Menu Sample -->
        <div class="menu-sample">
          <a href="menu-list-navigation.html#Sushi">
            <img src="http://assets.suelo.pl/soup/img/photos/menu-sample-sushi.jpg" alt="" class="image">
            <h3 class="title">Sushiler</h3>
          </a>
        </div>
        <!-- Menu Sample -->
        <div class="menu-sample">
          <a href="menu-list-navigation.html#Pasta">
            <img src="http://assets.suelo.pl/soup/img/photos/menu-sample-pasta.jpg" alt="" class="image">
            <h3 class="title">Makarnalar</h3>
          </a>
        </div>
        <!-- Menu Sample -->
        <div class="menu-sample">
          <a href="menu-list-navigation.html#Desserts">
            <img src="http://assets.suelo.pl/soup/img/photos/menu-sample-dessert.jpg" alt="" class="image">
            <h3 class="title">Tatlılar</h3>
          </a>
        </div>
        <!-- Menu Sample -->
        <div class="menu-sample">
          <a href="menu-list-navigation.html#Drinks">
            <img src="http://assets.suelo.pl/soup/img/photos/menu-sample-drinks.jpg" alt="" class="image">
            <h3 class="title">İçecekler</h3>
          </a>
        </div>
      </div>

    </section>

    <!-- Section - Offers -->
    <section class="section bg-light">

      <div class="container">
        <h1 class="text-center mb-6">kampanyalar</h1>
        <div class="carousel" data-slick='{"dots": true}'>
          <!-- Special Offer -->
          <div class="special-offer">
            <img src="http://assets.suelo.pl/soup/img/photos/special-burger.jpg" alt="" class="special-offer-image">
            <div class="special-offer-content">
              <h2 class="mb-2">Ücretsiz hamburger</h2>
              <h5 class="text-muted mb-5">200 Tl'den fazla sipariş verin ücretsiz hamburgerinizi alın</h5>
              <ul class="list-check text-lg mb-0">
                <li>Sadece pazar günleri</li>
                <li class="false">200TL'den daha fazla</li>
                <li>Sepetinizde hamburger olmasın <li>
              </ul>
            </div>
          </div>
          <!-- Special Offer -->
          <div class="special-offer">
            <img src="http://assets.suelo.pl/soup/img/photos/special-pizza.jpg" alt="" class="special-offer-image">
            <div class="special-offer-content">
              <h2 class="mb-2">Ücretsiz küçük boy pizza</h2>
              <h5 class="text-muted mb-5">200 Tl'den fazla sipariş verin ücretsiz pizzanızı alın</h5>
              <ul class="list-check text-lg mb-0">
                <li>Sadece çarşamba günleri</li>
                <li class="false">200TL'den daha fazla</li>
              </ul>
            </div>
          </div>
          <!-- Special Offer -->
          <div class="special-offer">
            <img src="http://assets.suelo.pl/soup/img/photos/special-dish.jpg" alt="" class="special-offer-image">
            <div class="special-offer-content">
              <h2 class="mb-2">Şanslı Cuma</h2>
              <h5 class="text-muted mb-5">Tüm yemeklerde %10 indirim</h5>
              <ul class="list-check text-lg mb-0">
                <li>sadece cuma günleri</li>
                <li>tüm yemeklerde</li>
                <li>Online siparişlere özel</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- Section -->
    <section class="section section-lg dark bg-dark">

      <!-- BG Image -->
      <div class="bg-image bg-parallax"><img src="http://assets.suelo.pl/soup/img/photos/bg-croissant.jpg" alt=""></div>

      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2 class="mb-3">tanıtım videomuzu izleyin</h2>
            <h5 class="text-muted">şimdi bir masa rezerve edin veya online sipariş verin</h5>
            <button class="btn-play" data-toggle="video-modal" data-target="#modalVideo" data-video="https://www.youtube.com/embed/uVju5--RqtY"></button>
          </div>
        </div>
      </div>

    </section>

    <!-- Footer -->
    <?php
    include 'footer.php'
    ?>
    <!-- Footer / End -->

  </div>
  <!-- Content / End -->

  <!-- Panel Cart -->
  <?php
  include 'sepet.php';
  ?>

  <!-- Panel Mobile -->
  <nav id="panel-mobile">
    <div class="module module-logo bg-dark dark">
      <a href="#">
        <img src="assets/img/logo-light.svg" alt="" width="88">
      </a>
      <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
    </div>
    <nav class="module module-navigation+"></nav>
    <div class="module module-social">
      <h6 class="text-sm mb-3">Bizi takip edin!</h6>
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
        <h4 class="modal-title">Size özel siparişler</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti ti-close"></i></button>
      </div>
      <div class="modal-product-details">
        <div class="row align-items-center">
          <div class="col-9">
            <h6 class="mb-1 product-modal-name">Boscaiola makarna</h6>
            <span class="text-muted product-modal-ingredients">makarna,peynir,domates,zeytin</span>
          </div>
          <div class="col-3 text-lg text-right">$<span class="product-modal-price">100</span></div>
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

<!-- Video Modal / Demo -->
<div class="modal modal-video fade" id="modalVideo" role="dialog">
  <button class="close" data-dismiss="modal"><i class="ti ti-close"></i></button>
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <iframe height="500"></iframe>
    </div>
  </div>
</div>

<!-- JS Core -->
<script src="dist/js/core.js"></script>

</body>

</html>

