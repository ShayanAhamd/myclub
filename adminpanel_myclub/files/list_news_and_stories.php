<?php
session_start();
require_once ('config.php');
include_once './universalLinks.php';
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
    <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css">
    <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <style>
    .size_div {
        background-color: #071227;
        width: 50px;
        height: 40px;
        border: 2px solid #9a883f;
        box-shadow: 1px 1px 3px black;
        padding: 10px;
        margin: 3px;
        border-radius: 5px;
    }

    .card_div {

        background: #071227;
        border-radius: 12px;
        padding: 8px;
        box-shadow: 1px 1px 5px #9a883f;

    }
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
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Products</h4>

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
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">All Products</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Title of News & Stories</th>
                                                <th>Category</th>
                                                <th>Posted By</th>
                                                <th>Show_On_page</th>
                                                <th>Details</th>
                                                <th>Image_1</th>
                                                <th>Image Alt</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        require_once "config.php";

                                           $sr_no = 1;
                                        $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC";
                                            
                                        $result = $link->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                ?>

                                            <tr>
                                                <td><?php echo $sr_no; $sr_no++; ?></td>
                                                <td><?php echo $row["title"]; ?></td>


                                                <td><?php echo $row["category"]; ?></td>

                                                <td><?php echo $row["posted_by"]; ?></td>
                                            


                                                <td>


                                                <?php if ($row["status"] == 0 ){?>
                                                    <a href="./status_news_stories.php?id=<?php echo $row["id"]; ?>&show=0"><button class="btn btn-success w-100">Show</button></a>
                                                    <?php }else{?>
                                                        <a href="./status_news_stories.php?id=<?php echo $row["id"]; ?>&show=1">  <button class="btn btn-danger w-100">Hide</button></a>
                                                    <?php }?>
                                                
                                                 


                                                </td>
                                                
                                                <td>
                                                <button class="btn btn-success w-100 view_data" id="<?php echo $row["id"]; ?>" > View</button>

                                                </td>





                                               

                                                <td style="position:relative;">


                                                    <?php if ($row["image"] == $imageUrl ){?>
                                                    <img src="../images/default.jpeg" alt="" width="70px" height="60px">
                                                    <?php }else{?>
                                                    <img src="../images/<?php echo $row["image"]; ?>" alt=""
                                                        width="70px" height="60px">
                                                    <?php }?>

                                                    <a href="edit_image_news_and_stories.php?id=<?php echo $row["id"]; ?>"
                                                        style="position:absolute;right: 0;top: 6px;"><i
                                                            class="fas fa-arrow-circle-down ml-1 mr-3"></i></a>
                                                </td>


                                                



                                               



                                                <td><?php echo $row["image_alt"]; ?></td>
                                                <td><?php echo $row["date"]; ?></td>

                                                <td>

                                                    <a href="edit_product.php?id=<?php echo $row["id"]; ?>"><i
                                                            class="fas fa-edit ml-1 mr-3"></i></a>



                                                    <a class="delete_id"
                                                        onclick='deleteFunction(<?php echo $row["id"]; ?>)'
                                                        data-toggle="modal" data-target="#deleteModel"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php  
                                        }
                                            } 
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Sr.No</th>
                                                <th>Title_of_News_&_Stories</th>
                                                <th>Category</th>
                                                <th>Posted_By</th>
                                                <th>Show_On_page</th>
                                                <th>Details</th>
                                                <th>Image_1</th>
                                                <th>Image_Alt</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
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
                All Rights Reserved by MY Club. Designed and Developed by <a href="http://anoweb.co/">ANOWEB</a>.
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



    <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
    <!-- Show Details -->
    <!-- ============================================================== -->

  <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="background: #ebecec;">
                            <div class="modal-header">
                                <h5 class="modal-title " id="exampleModalLabel">Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">


                                <div id="show_data">

                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->


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
    <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
    </script>



    <script>
    function deleteFunction(id) {
        var product_id = id;
        var url_page = "delete_news_and_stories.php?id=";
        var res = url_page.concat(product_id);
        $("#to_delete").attr("href", res);
    }
    </script>





   <!-- ============================================================== -->
    <!-- Ajax to show Detail -->
    <!-- ============================================================== -->
    <script>
    $(document).ready(function() {
        $('.view_data').click(function() {
            var id = $(this).attr("id");

            $.ajax({
                url: "news_stories_detail.php",
                method: "post",
                data: {
                    id: id
                },

                success: function(response) {
                    $('#show_data').html(response);
                    $('#Modal2').modal("show");
                }
            });
        });
    });
    </script>
</body>

</html>