<?php
session_start();
require_once ('config.php');
$id = $_GET['id'];
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
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
.dot {
  height: 15px;
  width: 15px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
@media print {
            body * {
                visibility: hidden;
            }
            .main-wrapper{
                display: none;
            }
            .print-container, .print-container *{
                visibility: visible;
                
            }
            .page-wrapper {
                margin: 0px !important ;
            }
          
            .print-container{
                position: absolute;
                left: 0px;
                top: 0px;
                height: 100%;
            }
            .print_hide{
                visibility: hidden;
            }
            .onPrintNone{
                visibility: hidden;
            }
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
                        <h4 class="page-title">Invoice</h4>
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
            <div class="w-100 row pr-5  mt-5">
                <?php 
                    $orderStatus = $_GET['status'];
                    $orderid = $_GET['id'];
                    $orderemail = $_GET['email'];
                    if ($orderStatus== 'pending') {
                        ?>
                        <div class="col-sm-6">
                            <a href="./includes/orderReviewMail.php?orderId=<?php echo $orderid; ?>&&email=<?php echo $orderemail ?>" class="ml-5">
                                <button class="btn btn-success">Order Dispatched</button>
                            </a>
                        </div>
                <?php
                    } else {?>
                        <div class="col-sm-6"></div>
                    <?php }?>
                <div class="col-sm-6 text-right"  onclick="window.print();"><i class="fa fa-print text-right border border-info  p-2" aria-hidden="true"> <span class="pl-2">Print</span> </i></div>
                
            </div>
            <div class="container-fluid  ">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row print-container">
                    <div class="col-md-12 ">
                        <div class="card card-body printableArea ">
                            <h3><b>INVOICE</b> <span class="pull-right">#<?php echo $id; ?></span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <h3> &nbsp;<b class="text-danger">My Club</b></h3>
                                            <!-- <img src="../assets/images/logoInvoice.png" width="220px" alt=""> -->
                                            <p class="text-muted m-l-5">University Road,
                                                <br /> Sargodha Pakistan,
                                                <br /> myclub@gmail.com,
                                                <br /> +92 300 00000000
                                            </p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <h3>To,</h3>
                                            <?php
                                        require_once "config.php";

                                           $sr_no = 1;
                                        $sql = "SELECT * FROM `order` WHERE `id` = '$id'";
                                            
                                        $result = $link->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                               
                                               $total_bill=  $row["total_bill"];
                                                ?>
                                            <h4 class="font-bold">
                                                <?php echo $row["name"]; ?>; 
                                            </h4>
                                            <p class="text-muted m-l-30">Address :<?php echo $row["address"]; ?>,
                                                <br />State :
                                                <?php echo $row["country"]; ?>,&nbsp;<?php echo $row["state"]; ?>,&nbsp;<?php echo $row["postal"]; ?> ,
                                                <br />Phone : <?php echo $row["phone"]; ?>,
                                                <br />Payment Method : <span class="text-uppercase"><?php echo $row["payment_method"]; ?></span>

                                                <?php if($row["payment_method"]=='cod'){ ?>

                                                <?php }else{ ?>
                                                    <br />cc_name : <?php echo $row["cc_name"]; ?>,
                                                    <br />cc_number : <?php echo $row["cc_number"]; ?>,
                                                    <br />cc_expiration : <?php echo $row["cc_expiration"]; ?>,
                                                    <br />cc_vv : <?php echo $row["cc_vv"]; ?>,
                                                <?php } ?>


                                            </p>
                                            <p class="m-t-30"><b>Order Date : </b><i class="fa fa-calendar"></i>
                                                <?php echo $row["order_date"]; ?></p>
                                            <p><b>Invoice Date :</b> <i class="fa fa-calendar"></i> <?php 
                                                 $date= date("Y/m/d");
                                                echo  date("F d , Y", strtotime($date)) ?> &nbsp;&nbsp; <?php date_default_timezone_set("Asia/Karachi");
                                                echo date("h:i:sa"); ?></p>

                                            <?php  
                                              }
                                            } 
                                            ?>
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Name</th>
                                                    <th class="text-right">Quantity</th>
                                                    <th class="text-center">Unit Cost <br> <small  class="text-center">(With Discount)</small></th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                           require_once "config.php";

                                            $sr_no = 1;
                                            $total = 0;
                                            $sql1 = "SELECT * FROM `order_items` WHERE `order_id` = '$id'";
                                                
                                            $result1 = $link->query($sql1);

                                            if ($result1->num_rows > 0) {
                                                // output data of each row
                                                while ($row1 = $result1->fetch_assoc()) {
                                                    $total += $row1['purchasing_price'];
                                                    ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $sr_no; $sr_no++; ?></td>

                                                    <?php
                                                    require_once "config.php";
                                                   
                                                    $product_id= $row1["product_id"] ;
                                                       
                                                        $sql2 = "SELECT * FROM `products` WHERE `id` = '$product_id'";
                                                            
                                                        $result2 = $link->query($sql2);

                                                        if ($result2->num_rows > 0) {
                                                            // output data of each row
                                                            while ($row2 = $result2->fetch_assoc()) {
                                                                
                                                    ?>
                                                    <td><?php echo $row2["name"] ; ?>
                                                     
                                                    &nbsp;&nbsp;
                                                    Description:&nbsp;<?php echo $row2["description"]; ?>
                                                    
                                                    <?php  
                                                    }
                                                        } 
                                                        ?>
                                                    
                                                    
                                                   
                                                    
                                                    </td>
                                                    <td class="text-right"> <?php echo $row1["quantity"]; ?> </td>
                                                    <td class="text-center"> <?php echo $row1["purchasing_price"]/$row1["quantity"]; ?></td>
                                                  
                                                    <td class="text-right"> <?php echo $row1["purchasing_price"] ?> </td>
                                                </tr>

                                                <?php  
                                                }
                                                    } 
                                                    ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                      

                                        <hr>
                                        <h3><b>Total :</b><small> &nbsp;PKR.</small> <?php echo $total_bill; ?></h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        <!-- <button class="btn btn-danger onPrintNone" type="submit"> Proceed to payment </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
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
</body>

</html>