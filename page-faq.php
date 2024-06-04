<!DOCTYPE html>
<html lang="en">
<?php
include 'head.php';
?>

<body data-spy="scroll" data-target="#side-navigation" data-offset="70">

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
            <div class="bg-image bg-parallax"><img src="http://assets.suelo.pl/soup/img/photos/bg-desk.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-4">
                        <h1 class="mb-0">FAQ</h1>
                        <h4 class="text-muted mb-0">Some informations about our restaurant</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section -->
        <section class="section">

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Side Navigation -->
                        <nav id="side-navigation" class="stick-to-content pt-4" data-local-scroll>
                            <h5 class="mb-3"><i class="ti ti-align-justify mr-3 text-muted"></i>Pick a content:</h5>
                            <ul class="nav nav-vertical">
                                <li class="nav-item">
                                    <a href="#faq1" class="nav-link">General</a>
                                    <ul>
                                        <li class="nav-item"><a href="#faq1_1" class="nav-link">How does it work?</a></li>
                                        <li class="nav-item"><a href="#faq1_2" class="nav-link">How long does it take?</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#faq2" class="nav-link">Delivery</a>
                                    <ul>
                                        <li class="nav-item"><a href="#faq2_1" class="nav-link">How does it work?</a></li>
                                        <li class="nav-item"><a href="#faq2_2" class="nav-link">How long does it take?</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#faq3" class="nav-link">Payments</a>
                                    <ul>
                                        <li class="nav-item"><a href="#faq3_1" class="nav-link">How does it work?</a></li>
                                        <li class="nav-item"><a href="#faq3_2" class="nav-link">How long does it take?</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-8 offset-md-1">
                        <div id="faq1">
                            <h3><i class="ti ti-file mr-4 text-primary"></i>General info</h3>
                            <hr>
                            <div id="faq1_1" class="pb-5">
                                <h4>How does it work?</h4>
                                <p class="lead">Vivamus non euismod dui. Curabitur rhoncus massa sit amet nisi molestie lobortis. Nam quis neque nec odio vestibulum pulvinar sit amet sed enim.</p>
                                <p>Sed lacus lacus, tincidunt a posuere sed, varius ut sapien. Vivamus nulla odio, scelerisque eu orci ut, tincidunt consequat ligula. Etiam ante felis, consequat vel accumsan vitae, gravida nec mauris. Maecenas vitae lobortis nisl. Donec lorem libero, vulputate sed arcu nec, sollicitudin vestibulum nisi.</p>
                            </div>
                            <div id="faq1_2" class="pb-5">
                                <h4>How long does it take?</h4>
                                <p class="lead">Vivamus non euismod dui. Curabitur rhoncus massa sit amet nisi molestie lobortis. Nam quis neque nec odio vestibulum pulvinar sit amet sed enim.</p>
                                <p> Vivamus nulla odio, scelerisque eu orci ut, tincidunt consequat ligula. Etiam ante felis, consequat vel accumsan vitae, gravida nec mauris. Maecenas vitae lobortis nisl. Donec lorem libero, vulputate sed arcu nec, sollicitudin vestibulum nisi.</p>
                            </div>
                        </div>
                        <div id="faq2">
                            <h3><i class="ti ti-package mr-4 text-primary"></i>Delivery</h3>
                            <hr>
                            <div id="faq2_1" class="pb-5">
                                <h4>How does it work?</h4>
                                <p class="lead">Vivamus non euismod dui. Curabitur rhoncus massa sit amet nisi molestie lobortis. Nam quis neque nec odio vestibulum pulvinar sit amet sed enim.</p>
                                <p>Sed lacus lacus, tincidunt a posuere sed, varius ut sapien. Vivamus nulla odio, scelerisque eu orci ut, tincidunt consequat ligula. Etiam ante felis, consequat vel accumsan vitae, gravida nec mauris. Maecenas vitae lobortis nisl. Donec lorem libero, vulputate sed arcu nec, sollicitudin vestibulum nisi.</p>
                            </div>
                            <div id="faq2_2" class="pb-5">
                                <h4>How long does it take?</h4>
                                <p class="lead">Vivamus non euismod dui. Curabitur rhoncus massa sit amet nisi molestie lobortis. Nam quis neque nec odio vestibulum pulvinar sit amet sed enim.</p>
                                <p> Vivamus nulla odio, scelerisque eu orci ut, tincidunt consequat ligula. Etiam ante felis, consequat vel accumsan vitae, gravida nec mauris. Maecenas vitae lobortis nisl. Donec lorem libero, vulputate sed arcu nec, sollicitudin vestibulum nisi.</p>
                            </div>
                        </div>
                        <div id="faq3">
                            <h3><i class="ti ti-wallet mr-4 text-primary"></i>Payments</h3>
                            <hr>
                            <div id="faq3_1" class="pb-5">
                                <h4>How does it work?</h4>
                                <p class="lead">Vivamus non euismod dui. Curabitur rhoncus massa sit amet nisi molestie lobortis. Nam quis neque nec odio vestibulum pulvinar sit amet sed enim.</p>
                                <p>Sed lacus lacus, tincidunt a posuere sed, varius ut sapien. Vivamus nulla odio, scelerisque eu orci ut, tincidunt consequat ligula. Etiam ante felis, consequat vel accumsan vitae, gravida nec mauris. Maecenas vitae lobortis nisl. Donec lorem libero, vulputate sed arcu nec, sollicitudin vestibulum nisi.</p>
                            </div>
                            <div id="faq3_2" class="pb-5">
                                <h4>How long does it take?</h4>
                                <p class="lead">Vivamus non euismod dui. Curabitur rhoncus massa sit amet nisi molestie lobortis. Nam quis neque nec odio vestibulum pulvinar sit amet sed enim.</p>
                                <p> Vivamus nulla odio, scelerisque eu orci ut, tincidunt consequat ligula. Etiam ante felis, consequat vel accumsan vitae, gravida nec mauris. Maecenas vitae lobortis nisl. Donec lorem libero, vulputate sed arcu nec, sollicitudin vestibulum nisi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

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
                <div class="panel-details panel-details-size">
                    <h5 class="panel-details-title">
                        <label class="custom-control custom-radio">
                            <input name="radio_title_size" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                        </label>
                        <a href="#panel-details-sizes-list" data-toggle="collapse">Size</a>
                    </h5>
                    <div id="panel-details-sizes-list" class="collapse show">
                        <div class="panel-details-content">
                            <div class="product-modal-sizes">
                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input name="radio_size" type="radio" class="custom-control-input" checked>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Small - 100g ($9.99)</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input name="radio_size" type="radio" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Medium - 200g ($14.99)</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input name="radio_size" type="radio" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Large - 350g ($21.99)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Panel Details / Additions -->
                <div class="panel-details panel-details-additions">
                    <h5 class="panel-details-title">
                        <label class="custom-control custom-radio">
                            <input name="radio_title_additions" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                        </label>
                        <a href="#panel-details-additions-content" data-toggle="collapse">Additions</a>
                    </h5>
                    <div id="panel-details-additions-content" class="collapse">
                        <div class="panel-details-content">
                            <!-- Additions List -->
                            <div class="row product-modal-additions">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Tomato ($1.29)</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Ham ($1.29)</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Chicken ($1.29)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Cheese($1.29)</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Bacon ($1.29)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Panel Details / Other -->
                <div class="panel-details panel-details-form">
                    <h5 class="panel-details-title">
                        <label class="custom-control custom-radio">
                            <input name="radio_title_other" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                        </label>
                        <a href="#panel-details-other" data-toggle="collapse">Other</a>
                    </h5>
                    <div id="panel-details-other" class="collapse">
                        <form action="#">
                            <textarea cols="30" rows="4" class="form-control" placeholder="Put this any other informations..."></textarea>
                        </form>
                    </div>
                </div>
            </div>
            <button type="button" class="modal-btn btn btn-secondary btn-block btn-lg" data-action="add-to-cart"><span>Add to Cart</span></button>
            <button type="button" class="modal-btn btn btn-secondary btn-block btn-lg" data-action="update-cart"><span>Update</span></button>
        </div>
    </div>
</div>

<!-- Cookies Bar -->

<!-- JS Core -->
<script src="dist/js/core.js"></script>

</body>

</html>
