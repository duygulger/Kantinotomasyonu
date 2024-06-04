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

<!--



 -->


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
                                    <li class="active">Hotel Room</li>
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
                                    <h4>Add New Room</h4>
                                </div>
                                <form>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Hotel Name</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Room Number</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Room Type</label>
                                            <select class="form-control bg-ash border-none">
                                                
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                                <option>E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Number of Bed</label>
                                            <select class="form-control bg-ash border-none">
                                                
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Cost per Bed</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="$300">
                                        </div>
                                    </div>
                                </form>
                                <button class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="button">Save</button>
                                <button class="btn btn-default btn-lg m-b-10 m-l-5 sbmt-btn" type="button">Reset</button>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card alert">
                                <div class="card-header pr">
                                    <h4>Hotel Room List</h4>
                                    <div class="search-action">
                                        <div class="search-type dib">
                                            <input class="form-control input-rounded" placeholder="Search by Hotel" type="text">
                                        </div>
                                        <div class="search-type dib">
                                            <input class="form-control input-rounded" placeholder="Search by Room..." type="text">
                                        </div>
                                        <div class="search-type dib">
                                            <input class="form-control input-rounded" placeholder="Search by bed" type="text">
                                        </div>
                                        <div class="search-type dib">
                                            <input class="form-control input-rounded" placeholder="search" type="text">
                                        </div>
                                    </div>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
                                                <ul class="card-option-dropdown dropdown-menu">
                                                    <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                                    <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                                    <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                                    <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                                                </ul>
                                            </li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table student-data-table m-t-20">
                                            <thead>
                                                <tr>
                                                    <th><label><input type="checkbox" value=""></label>Hotel Name</th>
                                                    <th>Room No</th>
                                                    <th>Room Type</th>
                                                    <th>No Of Bed</th>
                                                    <th>Cost Per Bed</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Boys-104</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>Big</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Boys-210</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>mediam</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Girls-320</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>Big</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Boys-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>Big</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Girls-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>mediam</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Boys-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>small</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Girls-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>Big</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Boys-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>Mediam</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Grils-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>Big</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Boys-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>small</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                            </tbody>
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
    <script src="assets/js/lib/bootstrap.min.js"></script>
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