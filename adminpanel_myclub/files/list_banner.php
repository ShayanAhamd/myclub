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
    <title>Q. collection</title>
    <!-- Custom CSS -->
    <link href="../assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>

    </style>
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
        <div class="page-wrapper" style="height: 100%;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Baners</h4>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row el-element-overlay">

                    <?php
                    require_once "config.php";

                    
                    $sql = "SELECT * FROM `baner`";
                        
                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            ?>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="../images/<?php echo $row["url"]; ?>"
                                        style="height: 160px;" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a
                                                    class="btn default btn-outline image-popup-vertical-fit el-link"
                                                    href="../images/<?php echo $row["url"]; ?>"><i
                                                        class="mdi mdi-magnify-plus"></i></a></li>
                                            <!-- <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">


                                    <button class="btn btn-secondary btn-md text-center "> <a class="text-white"
                                            href="edit_banner.php?id=<?php echo $row["id"]; ?>"><i
                                                class="fas fa-edit ml-2 mr-2"></i></a> </button>



                                    <button class="btn btn-danger btn-md text-center" ><a class="text-white delete_id" id="<?php echo $row["id"]; ?>" data-toggle="modal" data-target="#ModalCenter12"><i class="fas fa-trash ml-2 mr-2"></i></a></button>



                                </div>
                            </div>
                        </div>
                    </div>

                    <?php  
                        }
                            } 
                            ?>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Q. collection Designed and Developed by <a href="http://anoweb.co/">ANOWEB</a>.
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
    <!-- Confirm Delete Modal -->
    <!-- ============================================================== -->



    <div class="modal fade" id="ModalCenter12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Confirm to Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p style="color: red;"></p>
                    <a href="#" type="submit" id="to_delete" class="btn btn-danger ">Confirm
                        Delete</a>
                    <button type="button" class="btn btn-warning ml-2" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>





    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="../assets/libs/magnific-popup/meg.init.js"></script>


    <script>
    $(document).ready(function() {
        $('.delete_id').click(function() {
            var product_id = $(this).attr("id");
            var url_page = "delete_banner.php?id=";
            var res = url_page.concat(product_id);
           $("#to_delete").attr("href",res) ;

        });
    });
    </script>
</body>

</html>