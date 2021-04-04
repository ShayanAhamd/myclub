<?php
    session_start();

    //Check if the user is logged in, if not then redirect him to login page
    if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
        header("location: ./files/login.php");
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
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">
    <title>MY Club</title>
    <!-- Custom CSS -->
    <link href="./assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./dist/css/style.min.css" rel="stylesheet">

</head>

<body>

    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="./assets/images/logo.PNG" style="width: 35px;" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="./assets/images/logo-text.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        <!-- Logo icon -->

                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right"> 
                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="files/change_password.php"><i class="fa fa-key m-r-5 m-l-5"></i> Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="files/logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>


                        

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Teachers</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="files/add_teachers.php" class="sidebar-link"><i class=" fas fa-user-plus"></i><span class="hide-menu"> Add New Teacher </span></a></li>
                                <li class="sidebar-item"><a href="files/teachers_list.php" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> View All Teachers </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Students</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="files/add_students.php" class="sidebar-link"><i class=" fas fa-user-plus"></i><span class="hide-menu"> Add New Student </span></a></li>
                                <li class="sidebar-item"><a href="files/students_list.php" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> View All Students </span></a></li>
                            </ul>
                        </li>


                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
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
                        <a href="#">  
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
                        <a href="files/students_list.php">
                            <div class="card card-hover">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                    <h6 class="text-white">Students</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="files/teachers_list.php">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                    <h6 class="text-white">Teachers</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="files/add_teachers.php">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                <h6 class="text-white">Add Teacher</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                      <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="files/add_students.php">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                <h6 class="text-white">Add Students</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                  
                  
                   
                    
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
                                        <h5 class="card-subtitle">Overview </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <!-- <div class="col-lg-9">
                                        <div class="flot-chart">
                                            <div class="flot-chart-content" id="flot-line-chart"></div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-user m-b-5 font-16"></i>
                                                    <?php
                                                        require_once "files/config.php";

                                                        $sql = "SELECT COUNT(*) AS number1 FROM teachers
                                                        ";
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
                                                    <small class="font-light">Total Teachers</small>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-user m-b-5 font-16"></i>
                                                    <?php
                                                        require_once "files/config.php";

                                                        $sql = "SELECT COUNT(*) AS number2 FROM student
                                                        ";
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
                                                    <small class="font-light">Total Students</small>
                                                </div>
                                            </div>
                                           
                                          
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-table m-b-5 font-16"></i>
                                                    <?php
                                                        require_once "files/config.php";

                                                        $sql = "SELECT COUNT(*) AS number3 FROM quizzes
                                                        ";
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
                                                    <small class="font-light">Total Quiz</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-video m-b-5 font-16"></i>
                                                    <?php
                                                        require_once "files/config.php";

                                                        $sql = "SELECT COUNT(*) AS number4 FROM recordings
                                                        ";
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
                                                    <small class="font-light">Total Recording</small>
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

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by MY Club. Designed and Developed by
            <a href="https://anoweb.co/">ANOWEB.</a>  by club_قرآن.
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
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="./dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="./dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="./dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="./assets/libs/flot/excanvas.js"></script>
    <script src="./assets/libs/flot/jquery.flot.js"></script>
    <script src="./assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="./assets/libs/flot/jquery.flot.time.js"></script>
    <script src="./assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="./assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="./assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="./dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>