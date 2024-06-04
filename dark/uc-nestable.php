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
                                    <li class="active">UC-Nestable</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card alert nestable-cart">
                                <div class="card-header">
                                    <h4>NESTABLE 1</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nestable">
                                    <div class="dd" id="nestable">
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="1">
                                                <div class="dd-handle">Item 1</div>
                                            </li>
                                            <li class="dd-item" data-id="2">
                                                <div class="dd-handle">Item 2</div>
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="3">
                                                        <div class="dd-handle">Item 3</div>
                                                    </li>
                                                    <li class="dd-item" data-id="4">
                                                        <div class="dd-handle">Item 4</div>
                                                    </li>
                                                    <li class="dd-item" data-id="5">
                                                        <div class="dd-handle">Item 5</div>
                                                        <ol class="dd-list">
                                                            <li class="dd-item" data-id="6">
                                                                <div class="dd-handle">Item 6</div>
                                                            </li>
                                                            <li class="dd-item" data-id="7">
                                                                <div class="dd-handle">Item 7</div>
                                                            </li>
                                                            <li class="dd-item" data-id="8">
                                                                <div class="dd-handle">Item 8</div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li class="dd-item" data-id="9">
                                                        <div class="dd-handle">Item 9</div>
                                                    </li>
                                                    <li class="dd-item" data-id="10">
                                                        <div class="dd-handle">Item 10</div>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->



                        <div class="col-lg-4">
                            <div class="card alert nestable-cart">
                                <div class="card-header">
                                    <h4>NESTABLE 2</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nestable">
                                    <div class="dd" id="nestable2">
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="13">
                                                <div class="dd-handle">Item 13</div>
                                            </li>
                                            <li class="dd-item" data-id="13">
                                                <div class="dd-handle">Item 13</div>
                                            </li>
                                            <li class="dd-item" data-id="14">
                                                <div class="dd-handle">Item 14</div>
                                            </li>
                                            <li class="dd-item" data-id="15">
                                                <div class="dd-handle">Item 15</div>
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="16">
                                                        <div class="dd-handle">Item 16</div>
                                                    </li>
                                                    <li class="dd-item" data-id="17">
                                                        <div class="dd-handle">Item 17</div>
                                                    </li>
                                                    <li class="dd-item" data-id="18">
                                                        <div class="dd-handle">Item 18</div>
                                                    </li>
                                                    <li class="dd-item" data-id="18">
                                                        <div class="dd-handle">Item 19</div>
                                                    </li>
                                                    <li class="dd-item" data-id="18">
                                                        <div class="dd-handle">Item 20</div>
                                                    </li>
                                                    <li class="dd-item" data-id="18">
                                                        <div class="dd-handle">Item 21</div>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-4">
                            <div class="card alert nestable-cart">
                                <div class="card-header">
                                    <h4>NESTABLE 3</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nestable">
                                    <div class="dd" id="nestable3">
                                        <ol class="dd-list">
                                            <li class="dd-item dd3-item" data-id="13">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 13</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="14">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 14</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="14">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 16</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="14">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 17</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="14">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 18</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="14">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 19</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="15">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 15</div>
                                                <ol class="dd-list">
                                                    <li class="dd-item dd3-item" data-id="16">
                                                        <div class="dd-handle dd3-handle"></div>
                                                        <div class="dd3-content">Item 16</div>
                                                    </li>
                                                    <li class="dd-item dd3-item" data-id="17">
                                                        <div class="dd-handle dd3-handle"></div>
                                                        <div class="dd3-content">Item 17</div>
                                                    </li>
                                                    <li class="dd-item dd3-item" data-id="18">
                                                        <div class="dd-handle dd3-handle"></div>
                                                        <div class="dd3-content">Item 18</div>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div>
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


    <script src="assets/js/lib/nestable/jquery.nestable.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/nestable/nestable.init.js"></script>
    <!-- scripit init-->
    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->

</body>

</html>