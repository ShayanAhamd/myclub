<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | MyClub</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <!-- .........External CSS For Header................. -->
    <link rel="stylesheet" href="../css/navbar.css">
    <!-- .........External CSS For Header................. -->

    <!-- ================================================= -->

    <!-- .........External CSS For Footer................. -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- .........External CSS For Footer................. -->

    <!-- ================================================= -->

    <!-- .........External CSS For Home.......... -->
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/ThankYouPage.css">
    <!-- .........External CSS For Home.......... -->


</head>

<body style="font-family: sans-serif;">
    <?php
            include_once './header.php';
            include_once './socialsidebar.php';
        ?>




    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <div class="container-fluid p-0">
        <div class="col-12 bg_img text-center pt-5">
            <h1 class="pt-5">
                <h1 class="thank pt-4">
                    Thank You For Shopping here!
                </h1>
            </h1>
            <h3 class="way">
                Your Order is On the Way....
            </h3>
            <p class="click">
                Click here to Shop More.
            </p>
            <div class="main">
                <a href="#" class="shop">Shop More</a>
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <div class="container pt-5 pb-3 ">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-1 text-center text-lg-left"> </div>
            <div class="col-sm-12 col-md-12 col-lg-4 text-center text-lg-right">
                <p class="video_hding">
                    Find a Club Near You.
                </p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3  text-center text-lg-right pl-5 pl-lg-0">
                <div class="input-group mb-3">
                    <div class="input-group-prepend zip_marker">

                        <i class="fa fa-map-marker input-group-text zip_marker" aria-hidden="true"></i>
                    </div>
                    <input onkeyup="validate()" id="zip_form" type="text" class="form-control zip_form"
                        placeholder="Enter ZIP" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3 text-center text-lg-left">
                <button class="btn_club" id="btn_club" disabled>
                    FIND A CLUB
                </button>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-1 text-center text-lg-left"> </div>
        </div>
    </div>

    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->



    <?php
            include_once './footer.php';
        ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    function validate() {
        // alert("hello")
        // check if input is bigger than 3
        var value = document.getElementById('zip_form').value;
        if (value.length > 0) {
            document.getElementById("btn_club").disabled = false;
        } else {
            document.getElementById("btn_club").disabled = true;
        }
    }
    </script>
</body>

</html>