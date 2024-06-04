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
                                    <li class="active">UC-Rating-jRate</li>
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
                                    <h4>No checked stars</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rating1">
                                    <div id="no-checked-stars"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Half & Full Stars</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rating1">
                                    <div id="half-full-stars"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Full Stars Only</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rating1">
                                    <div id="full-stars-only"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Blue Stars</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rating1">
                                    <div id="blue-stars"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Horizontal stars</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rating1">
                                    <div id="hrizontal-stars"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Reverse stars</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rating1">
                                    <div id="reverse-stars"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Read-only stars</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rating1">
                                    <div id="read-only-stars"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Precision stars</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rating1">
                                    <div id="precision-stars"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Custom Icon-1</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rating1">
                                    <div id="custom-icon-1"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Custom Icon-2</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rating1">
                                    <div id="custom-icon-2"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Custom Icon-3</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rating1">
                                    <div id="custom-icon-3"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-3">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Custom Icon-4</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rating1">
                                    <div id="custom-icon-4"></div>
                                </div>
                            </div>
                            <!-- /# card -->
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


    <script src="assets/js/lib/rating1/jRate.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/rating1/jRate.init.js"></script>
    <!-- scripit init-->
    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->

</body>

</html>