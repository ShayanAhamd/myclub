<?php
    // Initialize the session
    session_start();
    require_once ('config.php');
    
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
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
    <link rel="stylesheet" type="text/css" href="../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/quill/dist/quill.snow.css">
    <link href="../dist/css/style.min.css" rel="stylesheet">

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
         <!-- ============================================================== -->
        <!-- Top Bar + Slider Bar -->
        <!-- ============================================================== -->
        <?php include_once './nav_bar.php' ?>
        <!-- ============================================================== -->
        <!-- End Top Bar + Slider Bar -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Change Password</h4>
                        <div class="ml-auto text-right">

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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <form class="form-horizontal" action="#" method="POST"  enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Change Password</h4>
                                 
                                   
                                   


                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-4 text-right control-label col-form-label">Old Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="lname" name="old_password" placeholder="Old Password Here">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-4 text-right control-label col-form-label">New Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="lname" name="password" placeholder="New Password Here">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-4 text-right control-label col-form-label">Confirm Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                                        </div>
                                    </div>

                                   
                                    



                                </div>
                                <div class="border-top">
                                    <div class="card-body text-right">
                                        <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>



                    </div>

                </div>
                <!-- editor -->
                <!-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Quill Editor</h4>
                               
                                <div id="editor" style="height: 300px;">
                                    <p>Hello World!</p>
                                    <p>Some initial <strong>bold</strong> text</p>
                                    <p>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
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
            All Rights Reserved by MY Club. Designed and Developed by
            <a href="https://anoweb.co/">ANOWEB.</a> 
           
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
    </div>
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
    <!-- This Page JS -->
    <script src="../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../dist/js/pages/mask/mask.init.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>
</body>

</html>

<?php
require_once("config.php");
if(isset($_POST["btn_submit"])){
    $old_password=trim($_POST["old_password"]);
    $password=trim($_POST["password"]);
    $hash_password = password_hash($password, PASSWORD_DEFAULT); 
   $id=1;
   

    $sql = "SELECT `password` FROM `admin` WHERE `id` = '$id'";

    if ($result = mysqli_query($link, $sql)) {
        
            while ($row = mysqli_fetch_array($result)) {
               $checkingPassword = $row['password'];
             

               if(password_verify($old_password, $checkingPassword)){
                
                $qu = "UPDATE `admin` SET `password`='$hash_password' WHERE `id` = '$id'";
                $res = mysqli_query($link,$qu);
                
                if($res){
                  
                    echo "<script>alert('Sucessfully Password Change')</script>";
                    echo("<script>window.location = './index.php'</script>");
                    
                }
                else{
                    echo "Not Inserted";
                } 

            }else{
                echo "<script>alert('Old Password Cannot match')</script>";
            }
    
            
        }
    }

}


?>