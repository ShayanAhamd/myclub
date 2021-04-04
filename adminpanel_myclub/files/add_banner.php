<?php 
  session_start();
  require_once ('config.php');
  include_once './universalLinks.php';
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
    <title>My Club</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/quill/dist/quill.snow.css">
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <style>
    #upload1 {
        opacity: 0;
    }

    #upload-label1 {
        position: absolute;
        top: 50%;
        left: 1rem;
        transform: translateY(-50%);
    }

    .image-area1 {
        border: 2px dashed #1f262d;
        padding: 1rem;
        position: relative;
    }

    .image-area1::before {
        content: 'Uploaded image result';
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 0.8rem;
        z-index: 1;
    }

    .image-area1 img {
        z-index: 2;
        position: relative;
    }






    #upload2 {
        opacity: 0;
    }

    #upload-label2 {
        position: absolute;
        top: 50%;
        left: 1rem;
        transform: translateY(-50%);
    }

    .image-area2 {
        border: 2px dashed #1f262d;
        padding: 1rem;
        position: relative;
    }

    .image-area2::before {
        content: 'Uploaded image result';
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 0.8rem;
        z-index: 1;
    }

    .image-area2 img {
        z-index: 2;
        position: relative;
    }


    #upload3 {
        opacity: 0;
    }

    #upload-label3 {
        position: absolute;
        top: 50%;
        left: 1rem;
        transform: translateY(-50%);
    }

    .image-area3 {
        border: 2px dashed #1f262d;
        padding: 1rem;
        position: relative;
    }

    .image-area3::before {
        content: 'Uploaded image result';
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 0.8rem;
        z-index: 1;
    }

    .image-area3 img {
        z-index: 2;
        position: relative;
    }
    </style>
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
                        <h4 class="page-title">Add Banner Images</h4>
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
                            <form class="form-horizontal" action="" method="POST"  enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Image</h4>
                                  
                                   
                                            <div class="row py-4">
                                                
                                                <div class="col-lg-6 mx-auto">

                                                    <!-- Upload image input-->
                                                    <form action="" method="POST"  enctype="multipart/form-data">
                                                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">

                                                        <input id="upload2" type="file" name="image" onchange="readURL2(this);" class="form-control border-0" required>
                                                        <label id="upload-label2" for="upload2" class="font-weight-light text-muted">Choose file</label>
                                                        <div class="input-group-append">
                                                            <label for="upload2" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                    <button type="submit" name="btn_submit" class="btn  shadow-sm m-4" value="" style="background-color: #0891FF;;letter-spacing: 0.6px;border-radius: 2px;color: #FFF; display: inline-block; vertical-align: middle;">Update Image</button>

                                                    </div>
                                                    </form>
                                                    <!-- Uploaded image area-->
                                                    <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                                                    <div class="image-area2 mt-4"><img id="imageResult2" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

                                                </div>
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
            All Rights Reserved by MY Club Designed and Developed by <a href="http://anoweb.co/">ANOWEB</a>.
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
    

<script>
    /*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult1')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload1').on('change', function () {
        readURL1(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload1' );
var infoArea = document.getElementById( 'upload-label1' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}
</script>






<script>
    /*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult2')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload2').on('change', function () {
        readURL2(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload2' );
var infoArea = document.getElementById( 'upload-label2' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}
</script>





<script>
    /*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult3')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload3').on('change', function () {
        readURL3(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload3' );
var infoArea = document.getElementById( 'upload-label3' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}
</script>
</body>

</html>

<?php
require_once "config.php";
if (isset($_POST["btn_submit"])) {

    $image = $_FILES["image"]["name"];
    

    //Image 
    $tmp_image = $_FILES["image"]["tmp_name"];
    $folder = "../images/". $image;
    move_uploaded_file($tmp_image, $folder);
    //end of image 
    $image = $imageUrl.$image;

    $sql = "INSERT INTO `baner`(`url`) VALUES ('$image')";
 


        
    if ($link->query($sql) === true) {
        // echo("<script>window.location = 'add_banner.php'</script>");
        echo `<script>alert("Banner Inserted")</script>`;
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }

}
?>