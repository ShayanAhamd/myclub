<?php 
  session_start();
  require_once ('config.php');
  
  // Check if the user is already logged in, if yes then redirect him to welcome page
  if(!isset($_SESSION["admin"]) && $_SESSION["admin"] !== true){
      header("location: login.php");
      exit;
  }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>MY Club</title>
    <!-- Custom CSS -->
    <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
     


     <!-- ============================================================== -->
     <!-- Top Bar + Slider Bar -->
     <!-- ============================================================== -->
       <?php include_once './nav_bar.php' ?>
     <!-- ============================================================== -->
     <!-- End Top Bar + Slider Bar -->
     <!-- ============================================================== -->






        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="index.php">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                    <h6 class="text-white">Dashboard</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="add_products.php">
                            <div class="card card-hover">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white"><i class="mdi  mdi-pencil"></i></h1>
                                    <h6 class="text-white">Add Products</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="#">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi  mdi-receipt"></i></h1>
                                <h6 class="text-white">List Of Products</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="./add_record.php">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi  mdi-pencil"></i></h1>
                                <h6 class="text-white">Add </h6>
                            </div>
                        </div>
                    </a>
                    </div>
                
                     <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="./list_record.php">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi  mdi-receipt"></i></h1>
                                <h6 class="text-white">List Of Record</h6>
                            </div>
                        </div>
                    </a>
                    </div>
                    
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="./list_users.php">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                <h6 class="text-white">List Of Users</h6>
                            </div>
                        </div>
                    </a>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Site Analysis</h4>
                                        <h5 class="card-subtitle">Overview of Latest Month</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <!-- <div class="col-lg-9">
                                        <div class="flot-chart">
                                            <div class="flot-chart-content" id="flot-line-chart"></div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="mdi mdi-chart-areaspline m-b-5 font-16"></i>
                                                   <?php
                                                        require_once "./config.php";

                                                        $sql = "SELECT COUNT(*) AS number1 FROM overall_record";
                                                        $result = $link->query($sql);

                                                        if ($result->num_rows > 0) {
                                                            // output data of each row
                                                            while ($row = $result->fetch_assoc()) {
                                                                ?>
                                                            <div >

                                                            <h5 class="m-b-0 m-t-5"><?php echo $row['number1'] ?></h5>

                                                            </div>

                                                            <?php  
                                                        }
                                                            } else {
                                                                echo "No Result Found";
                                                            }
                                                        ?>
                                                   <small class="font-light">Total Records</small>
                                                </div>
                                            </div>
                                             <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="mdi mdi-chart-areaspline m-b-5 font-16"></i>
                                                   <?php
                                                        require_once "./config.php";

                                                        $sql = "SELECT COUNT(*) AS number2 FROM categories";
                                                        $result = $link->query($sql);

                                                        if ($result->num_rows > 0) {
                                                            // output data of each row
                                                            while ($row = $result->fetch_assoc()) {
                                                                ?>
                                                            <div >

                                                            <h5 class="m-b-0 m-t-5"><?php echo $row['number2'] ?></h5>

                                                            </div>

                                                            <?php  
                                                        }
                                                            } else {
                                                                echo "No Result Found";
                                                            }
                                                        ?>
                                                   <small class="font-light">Total Categories</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-cart-plus m-b-5 font-16"></i>
                                                   <?php
                                                        require_once "./config.php";

                                                        $sql = "SELECT COUNT(*) AS number3 FROM `user_login`";
                                                        $result = $link->query($sql);

                                                        if ($result->num_rows > 0) {
                                                            // output data of each row
                                                            while ($row = $result->fetch_assoc()) {
                                                                ?>
                                                            <div >

                                                            <h5 class="m-b-0 m-t-5"><?php echo $row['number3'] ?></h5>

                                                            </div>

                                                            <?php  
                                                        }
                                                            } else {
                                                                echo "No Result Found";
                                                            }
                                                        ?>
                                                   <small class="font-light">Total Users</small>
                                                </div>
                                            </div>
                                             <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-tag m-b-5 font-16"></i>
                                                   <?php
                                                        require_once "./config.php";

                                                        $sql = "SELECT COUNT(*) AS number4 FROM `user_record`";
                                                        $result = $link->query($sql);

                                                        if ($result->num_rows > 0) {
                                                            // output data of each row
                                                            while ($row = $result->fetch_assoc()) {
                                                                ?>
                                                            <div >

                                                            <h5 class="m-b-0 m-t-5"><?php echo $row['number4'] ?></h5>

                                                            </div>

                                                            <?php  
                                                        }
                                                            } else {
                                                                echo "No Result Found";
                                                            }
                                                        ?>
                                                   <small class="font-light">Users Record</small>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
             
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by MY Club. Designed and Developed by
            <a href="https://anoweb.co/">ANOWEB.</a> 
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../assets/libs/flot/excanvas.js"></script>
    <script src="../assets/libs/flot/jquery.flot.js"></script>
    <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>