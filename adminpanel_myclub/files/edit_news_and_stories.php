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
<?php
    require_once "config.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM `news_stories` WHERE `id`='$id'";

    $result = $link->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
     
        $image_alt = $row["image_alt"];
        $category = $row["category"];
        $title= $row["title"];
        $detail = $row["details"];
        $date = $row["date"];
        $posted_by = $row["posted_by"];
    }
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
                        <h4 class="page-title">Add News & Stories</h4>
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
                                    <h4 class="card-title">News & Stories Info</h4>
                                   
                                   
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-md-3 text-right control-label col-form-label">Category</label>
                                        <div class="col-md-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="category" required>
                                                    <option value="<?php echo $category; ?>" selected><?php echo $category; ?></option>
                                                    <option value="Our Experts">Our Experts</option>
                                                    <option value="Club Stories">Club Stories</option>
                                                    <option value="Teen Voices">Teen Voices</option>
                                                    <option value="Parent Resources">Parent Resources</option>
                                                    <option value="Alumni">Alumni</option>
                                                    <option value="Partner News">Partner News</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-md-3 text-right control-label col-form-label">Date</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" id="date" placeholder="Date " name="<?php echo $date; ?>" name="date" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 text-right control-label col-form-label">Title
                                        </label>
                                        <div class="col-md-9">
                                            <input type="title" class="form-control"  name="title" placeholder="Title of News & Stories" value="<?php echo $title; ?>" required>
                                        </div>
                                    </div>

                                  
                                    <div class="form-group row">
                                        <label class="col-md-3 text-right control-label col-form-label">Image Alt</label>
                                        <div class="col-md-9">
                                        <input type="text"  class="form-control"  name="image_alt" placeholder="Image Alternative" value="<?php echo $image_alt; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                            <label for="cono1"
                                                class="col-md-3 text-right control-label col-form-label">Details</label>
                                            <div class="col-md-9">


                                                <div id="editor" style="height: 300px;" required>
                                                <?php echo $detail; ?>
                                                </div>
                                                <input type="text" name="detail" class="d-none detail">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                        <label class="col-md-3 text-right control-label col-form-label">Posted By
                                        </label>
                                        <div class="col-md-9">
                                            <input type="title" class="form-control"  name="posted_by" placeholder="Posted BY" value="<?php echo $posted_by; ?>" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="border-top">
                                    <div class="card-body text-right">
                                        <button type="submit" name="submit" id="button1" class="btn btn-primary">Submit</button>
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



     <!-- For Description -->

     <script>
    $(document).ready(function() {
        $("#button1").click(function() {
            var res = $('.ql-editor').html();
            $(".detail").val(res);


        });
    });
    </script>
</body>

</html>



<?php
require_once "config.php";
if (isset($_POST["submit"])) {
        
        $category = $_POST['category'];
        $title = $_POST['title'];
        $image_alt = $_POST['image_alt'];
        $detail = $_POST['detail'];
        $posted_by = $_POST['posted_by'];

        $date= date("Y/m/d");
        $date =   date("F d , Y", strtotime($date)) ;
       

        // For product general info
        $sql = "UPDATE `news_stories` SET  `category` = '$category', `title`='$title',`image_alt` = '$image_alt', `posted_by` = '$posted_by', `date` = '$date', `details` ='$detail' WHERE `id` = '$id')";
     
        $result = mysqli_query($link, $sql);

        if ($result) {

            echo '<script type="text/javascript">alert("News & Stories Update Successfully");</script>';

            echo("<script>window.location = 'list_news_and_stories.php'</script>");
       
        } else {

            echo '<script type="text/javascript">alert("Not Inserted Product");</script>';
        }


    
        



}

?>