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
                                    <li class="active">UI-Images</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Rounded Corners</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted m-b-15">The <code>.img-rounded</code> class adds rounded corners to an image (IE8 does not support rounded corners):</p>
                                    <img src="assets/images/paris.jpg" class="img-rounded img-responsive" alt="Cinque Terre">
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Circle</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted m-b-15">The <code>.img-circle</code> class shapes the image to a circle (IE8 does not support rounded corners):</p>
                                    <img src="assets/images/newyork.jpg" class="img-circle img-responsive" alt="Cinque Terre">
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Thumbnail</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted m-b-15">The <code>.img-thumbnail</code> class shapes the image to a thumbnail:</p>
                                    <img src="assets/images/sanfran.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre">
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Responsive Images</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted m-b-15">Create responsive images by adding an <code>.img-responsive</code> class to the <code>&lt;img&gt;</code> tag. The image will then scale nicely to the parent element.</p>
                                    <img src="assets/images/lights.jpg" class=" img-responsive" alt="Cinque Terre">
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Image Gallery</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted m-b-15">You can also use Bootstrap's grid system in conjunction with the <code>.thumbnail</code> class to create an image gallery.</p>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="thumbnail">
                                                <a href="assets/images/lights.jpg">
                                                    <img class="w-100" src="assets/images/lights.jpg" alt="Lights">
                                                    <div class="caption">
                                                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail">
                                                <a href="assets/images/nature.jpg">
                                                    <img class="w-100" src="assets/images/nature.jpg" alt="Nature">
                                                    <div class="caption">
                                                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail">
                                                <a href="assets/images/fjords.jpg">
                                                    <img class="w-100" src="assets/images/fjords.jpg" alt="Fjords">
                                                    <div class="caption">
                                                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
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
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->


    <!--  Chart js -->
    <!--  Chart js -->
    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/lib/chart-js/chartjs-init.js"></script>
    <!-- // Chart js -->
    <!-- // Chart js -->
    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->





</body>

</html>