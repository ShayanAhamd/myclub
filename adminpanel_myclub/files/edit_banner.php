<?php
// Initialize the session
session_start();
$id = $_GET['id'];
include_once './universalLinks.php';
//Check if the user is logged in, if not then redirect him to login page

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link rel="stylesheet" type="text/css" href="../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css"
        href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/quill/dist/quill.snow.css">
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
    border: 2px dashed rgba(255, 255, 255, 0.7);
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
    border: 2px dashed rgba(255, 255, 255, 0.7);
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
    border: 2px dashed rgba(255, 255, 255, 0.7);
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
/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
body {
    min-height: 100vh;
    background-color: #757f9a;
    background-image: linear-gradient(147deg, #757f9a 0%, #d7dde8 100%);
}
 </style>
</head>
<body>
<div class="container py-5">

<!-- For demo purpose -->
<header class="text-white text-center">
    <h1 class="display-4">Update image</h1>
   
    <img src="https://res.cloudinary.com/mhmd/image/upload/v1564991372/image_pxlho1.svg" alt="" width="150" class="mb-4">
</header>


<div class="row py-4">
    <div class="col-lg-6 mx-auto">

        <!-- Uploaded image area-->
        <div class="image-area1 mt-4">
            
        <?php
            require_once "config.php";

            $sql = "SELECT * FROM `baner` WHERE `id` = '$id'";
            $result = $link->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?>
     
        <img id="imageResult1" src="<?php echo $row["url"]; ?>" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
        

        <?php  
            }
                } else {
                    echo "No Result Found";
                }
                ?>
    
    </div>

    </div>
</div>



<div class="row py-4">
    
    <div class="col-lg-6 mx-auto">

        <!-- Upload image input-->
        <form action="" method="POST"  enctype="multipart/form-data">
        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">

            <input id="upload2" type="file" name="image" onchange="readURL2(this);" class="form-control border-0">
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
    $folder = "../images/".$image;
    move_uploaded_file($tmp_image, $folder);
    //end of image 
    $image = $baseUrl.$image;

        $sql = "UPDATE `baner` SET `url`='$image' WHERE `id` = '$id'";
    


        
    if ($link->query($sql) === true) {
        echo("<script>window.location = 'list_banner.php'</script>");
        // echo `<script>alert("Data Inserted")</script>`;
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }

}
?>