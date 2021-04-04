<?php
    // Initialize the session
    session_start();
    require_once ('config.php');
    include_once './universalLinks.php';
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(!isset($_SESSION["admin"]) && $_SESSION["admin"] !== true){
        header("location: ../index.php");
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
    <link rel="stylesheet" type="text/css"
        href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
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
                        <h4 class="page-title">Add Product</h4>
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
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Product Info</h4>
                                   
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-4 text-right control-label col-form-label">Product Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="name" placeholder="Name Here" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-4 text-right control-label col-form-label">Category</label>
                                        <div class="col-sm-8">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="category" required>
                                                    <option value="Cricket">Cricket</option>
                                                    <option value="Table Tennis">Table Tennis</option>
                                                    <option value="Basket Ball Kits">Basket Ball Kits</option>
                                                    <option value="Jumping Bag">Jumping Bag</option>
                                                    <option value="Horse Riding Kits">Horse Riding Kits</option>
                                                    <option value="Hicking">Hicking</option>
                                                    <option value="Shooting">Shooting</option>
                                                    <option value="Taekwondo Kits">Taekwondo Kits</option>
                                                    <option value="Watches">Watches</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-4 text-right control-label col-form-label">Product Price</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="name" placeholder="Product Price " name="price" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-4 text-right control-label col-form-label">Product Quantity
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control"  name="quantity" placeholder="Product Quantity" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-4 text-right control-label col-form-label">Product Description</label>
                                        <div class="col-sm-8">
                                            <textarea  class="form-control" id="description" rows="4" placeholder="Description Here" name="description" required>
                                            </textarea>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-4 text-right control-label col-form-label">Additional Info</label>
                                        <div class="col-sm-8">
                                            <textarea  class="form-control" id="additional_info" rows="4" placeholder="Additional Info Here" name="additional_info" required>
                                            </textarea>
                                        </div>
                                    </div>
                                   
                                  
                                    <div class="form-group row">
                                        <label class="col-md-4 text-right control-label col-form-label">Product Image 1</label>
                                        <div class="col-md-8">
                                        <input type="file"  class="form-control"  name="image1" accept="image/*" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-4 text-right control-label col-form-label">Product Image 2</label>
                                        <div class="col-md-8">
                                        <input type="file"  class="form-control"  name="image2" accept="image/*" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-4 text-right control-label col-form-label">Product Image 3</label>
                                        <div class="col-md-8">
                                        <input type="file"  class="form-control"  name="image3" accept="image/*" >
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-md-4 text-right control-label col-form-label">Product Image 4</label>
                                        <div class="col-md-8">
                                        <input type="file"  class="form-control"  name="image4" accept="image/*" >
                                        </div>
                                    </div>

                                </div>
                                <div class="border-top">
                                    <div class="card-body text-right">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
require_once "config.php";
if (isset($_POST["submit"])) {
        // For Max Value

        $name = $_POST['name'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $additional_info = $_POST['additional_info'];

        $date= date("Y/m/d");
        $date =   date("F d , Y", strtotime($date)) ;
        date_default_timezone_set("Asia/Karachi");
        $time = date("h:i:sa");
       $date_time = $time.$date;
 
        //Image 1
        $image1 = $_FILES["image1"]["name"];
        $tmp_image1 = $_FILES["image1"]["tmp_name"];
        $folder1 = "../images/".$image1;
        move_uploaded_file($tmp_image1, $folder1);
        //end of image 1

        //Image 2
        $image2 = $_FILES["image2"]["name"];
        $tmp_image2 = $_FILES["image2"]["tmp_name"];
        $folder2 = "../images/".$image2;
        move_uploaded_file($tmp_image2, $folder2);
        //end of image 2

        //Image 3
        $image3 = $_FILES["image3"]["name"];
        $tmp_image3 = $_FILES["image3"]["tmp_name"];
        $folder3 = "../images/".$image3;
        move_uploaded_file($tmp_image3, $folder3);
        //end of image 3

        //Image 4
        $image4 = $_FILES["image4"]["name"];
        $tmp_image4 = $_FILES["image4"]["tmp_name"];
        $folder4 = "../images/".$image4;
        move_uploaded_file($tmp_image4, $folder4);
        //end of image 4

       

        //Images
        $image1 = $imageUrl.$image1;
        $image2 = $imageUrl.$image2;
        $image3 = $imageUrl.$image3;
        $image4 = $imageUrl.$image4;
        //End Images

        

        // For product general info
        $sql = "INSERT INTO `products`(`name`, `category`, `price`, `description`, `quantity`, `additional_info`, `date`) VALUES ('$name','$category','$price','$description','$quantity','$additional_info','$date_time')";
        echo $sql;
        $result = mysqli_query($link, $sql);

        if ($result) {

            $last_id = mysqli_insert_id($link);
           // echo "New record created successfully. Last inserted ID is: " . $last_id;
            // echo '<script type="text/javascript">alert("DataInserted");</script>';

            // Images 
            $sql1 = "INSERT INTO `product_images`(`product_id`, `image1`, `image2`, `image3`, `image4`) VALUES ('$last_id','$image1','$image2','$image3','$image4')";
            //  echo $sql1;
            $result1 = mysqli_query($link, $sql1);
            if ($result1) {
               echo '<script type="text/javascript">alert("Data Inserted");</script>';
            } else {
                echo '<script type="text/javascript">alert("Not Inserted Images");</script>';
            }



       
        } else {

            echo '<script type="text/javascript">alert("Not Inserted Product");</script>';
        }


    
        



}

?>