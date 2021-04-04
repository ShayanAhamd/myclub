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

    <!-- .........External CSS For Header................. -->
    <link rel="stylesheet" href="../css/navbar.css">
    <!-- .........External CSS For Header................. -->

    <!-- ================================================= -->

    <!-- .........External CSS For Footer................. -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- .........External CSS For Footer................. -->

    <!-- ================================================= -->

    <!-- .........External CSS For Home.......... -->
    <link rel="stylesheet" href="../css/kids_overview.css">
    <!-- .........External CSS For Home.......... -->


</head>

<body style="font-family: sans-serif;">
    <?php
            include_once './header.php';
            include_once './socialsidebar.php';
        ?>
    <!-- ================================================= -->
    <!-- .................Carosel..................... -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../images/kids/BGCA_KINHero_KidsInNeed_Desktop_About.jpg"
                    alt="First slide" height="680px" width="1200px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/kids/BGCA_KINHero_MarginalizedVoices_Desktop_About.jpg"
                    alt="Second slide" height="680px" width="1200px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/kids/BGCA_KINHero_WorkforceReadiness_Desktop_About.jpg"
                    alt="Third slide" height="680px" width="1200px">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- .....................Carosel..................... -->
    <!-- ================================================= -->
    <!-- ......................Video...................... -->
    <!-- ================================================= -->
    <div class="container-fluid pt-5 pb-5">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class='video-wrapper'>
                            <div>
                                <img class="img-fluid image-border" src="../images/img-gf.jpeg" width="100%"
                                    height="250px">
                            </div>
                            <div class='video-overlay'>
                                <i class="fa fa-play-circle-o play-button2 video-btn1" aria-hidden="true"
                                    data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk"
                                    data-target="#myModal1"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Modal1 -->
                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="closes" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <!-- 16:9 aspect ratio -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" id="video1"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal1 -->
                    <div class="col-12 col-lg-6 pr-5 pt-5">
                        <h1 class="video_hding">
                            Whatever It Takes
                        </h1>
                        <p class="video_para">
                            This is our mantra, our promise, as we help kids become their best selves. Focusing on 5 key
                            areas, we bridge the <a href="./kids_workforce_readiness.php" class="links">Workforce
                                Readiness</a> Gap; end the <a href="./kids_cycle_of_inequity.php" class="links">Cycles
                                of
                                Inequity</a>; neutralize <a href="./kids_saftey_threats.php" class="links">Safety
                                Threats</a>; fill the <a href="./kids_mentorship_voice.php" class="links">Mentorship
                                Void</a>; listen and amplify <a href="./kids_elevate_youth_voices.php"
                                class="links">Marginalized Voices</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <div class="container-fluid pt-5 bg_img">
        <div class="container">
            <div class="col-12 text-center">
                <h1 class="report">
                    Progress Report
                </h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row pl-4">
                        <div class="col-12 col-lg-4 pt-4">
                            <div class="main">
                                <img src="../images/images/img-jsd.jpeg" height="230px" alt="Notebook"
                                    style="width:100%;">
                                <div class="content text-center">
                                    <h1>
                                        <a href="./kids_workforce_readiness.php" class="text">
                                            Workforce Readiness
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 pt-4">
                            <div class="main">
                                <img src="../images/images/img-dsf.jpeg" alt="Notebook"
                                    style="width:100%; height:230px">
                                <div class="content text-center">
                                    <h1>
                                        <a href="./kids_mentorship_voice.php" class="text">
                                            Mentorship Void
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 pt-4">
                            <div class="main">
                                <img src="../images/images/img-3.jpeg" alt="Notebook" style="width:100%; height:230px">
                                <div class="content text-center">
                                    <h1>
                                        <a href="./kids_mentorship_voice.php" class="text">
                                            Safety Threats
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 pt-5 pb-5">
                    <div class="row pl-4">
                        <div class="col-2"></div>
                        <div class="col-12 col-lg-4 pt-4">
                            <div class="main">
                                <img src="../images/images/img-fjd.jpeg" alt="Notebook"
                                    style="width:100%; height:230px">
                                <div class="content text-center">
                                    <h1>
                                        <a href="./kids_mentorship_voice.php" class="text">
                                            Marginalized Voices
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 pt-4">
                            <div class="main">
                                <img src="../images/images/img-jfn.jpeg" alt="Notebook"
                                    style="width:100%; height:230px">
                                <div class="content text-center">
                                    <h1>
                                        <a href="./kids_cycle_of_inequity.php" class="text">
                                            Cycles of Inequity
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <div class="container-fluid pt-5 pb-5 bg_gray">
        <h1 class="text-center video_hding">
            How You Can Help
        </h1>
        <div class="row pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 text-center pt-3 pt-lg-0">
                        <img src="../images/overview2/HowHelp_Advocate_Image.png" alt="" width="100%">
                        <div class="col-12 text-center">
                            <a href="./advocacy.php">
                                <button type="button" class="btns">
                                    ADVOCATE
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-center pt-3 pt-lg-0">
                        <img src="../images/overview2/HowHelp_Donate_Image.png" alt="" width="100%">
                        <div class="col-12 text-center">
                            <a href="./donatenow.php">
                                <button type="button" class="btns">
                                    DONATE
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-lg-4 text-center pt-3 pt-lg-0">
                        <img src="../images/overview2/HowHelp_EmailSignUp_Image.png" alt="" width="100%">
                        <div class="col-12 text-center">
                            <button class="btns">
                                SIGN UP
                            </button>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- <div class="container pt-5 pl-5 pb-5">
        <div class="col-12">
            <h1 class="video_hding">
                Our Stories
            </h1>
        </div>
        <div class="row pt-3 pl-3">
            <div class="col-12 col-lg-6">
                <p>
                    <a href="" class="link">
                        Order Up!
                    </a>
                </p>
                <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                <p class="pt-3">
                    <a href="" class="link pt-5">
                        Foster Care Kids
                    </a>
                </p>
                <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                <p class="pt-3">
                    <a href="" class="link pt-5">
                        Mentoring At Native Clubs
                    </a>
                </p>
                <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
            </div>
            <div class="col-12 col-lg-6">
                <p class="pt-3 pt-lg-0">
                    <a href="" class="link">
                        Economic Opportunity for Youth
                    </a>
                </p>
                <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                <p class="pt-3">
                    <a href="" class="link pt-5">
                        Pride Month Matters
                    </a>
                </p>
                <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                <p class="pt-3">
                    <a href="" class="link pt-5">
                        Stepping Up for Safety
                    </a>
                </p>
                <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
            </div>
        </div>
    </div> -->
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
    <div class="container-fluid video_bg pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 pt-5 pl-5">
                    <h1 class="video_hding pl-5">
                        Membership Benefits
                    </h1>
                    <p class="pl-5">
                        We want every child in Pakistan to be in a safe, constructive environment when they are not at
                        home
                        or in
                        school.
                    </p>
                    <!-- <div class="pl-5">
                        <button class="btn_club">
                            LEARN MORE
                        </button>
                    </div> -->
                </div>
                <div class="col-12 col-lg-6">
                    <div class="container pt-5 pb-3 video_bg">
                        <div class="row">
                            <!-- <div class="col-sm-12 col-md-12 col-lg-1 text-center text-lg-left"> </div> -->
                            <div class="col-12 text-left pl-4 pl-lg-0">
                                <p class="video_hding pl-4 pl-lg-0">
                                    Find a Club Near You.
                                </p>
                            </div>
                            <div class="col-12 col-lg-8 text-center pl-5 pl-lg-0">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend zip_marker">

                                        <i class="fa fa-map-marker input-group-text zip_marker" aria-hidden="true"></i>
                                    </div>
                                    <input onkeyup="validate()" id="zip_form" type="text" class="form-control zip_form"
                                        placeholder="Enter ZIP" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-12 pl-5 pl-lg-0">
                                <button class="btn_club" id="btn_club" disabled>
                                    FIND A CLUB
                                </button>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-1 text-center text-lg-left"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <div class="conatiner">

    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->

    <?php
            include_once './footer.php';
        ?>
    <!-- ===MODEL_1=== -->
    <script>
    $(document).ready(function() {
        // Gets the video src from the data-src on each button
        var $videoSrc;
        $(".video-btn1").click(function() {
            $videoSrc = $(this).attr("data-src");
            console.log("button clicked" + $videoSrc);
        });

        // when the modal is opened autoplay it
        $("#myModal1").on("shown.bs.modal", function(e) {
            console.log("modal opened" + $videoSrc);
            // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
            $("#video1").attr(
                "src",
                $videoSrc + "?autoplay=1&showinfo=0&modestbranding=1&rel=0&mute=1"
            );
        });

        // stop playing the youtube video when I close the modal
        $("#myModal1").on("hide.bs.modal", function(e) {
            // a poor man's stop video
            $("#video1").attr("src", $videoSrc);
        });

        // document ready
    });
    </script>
    <!-- ===MODEL_1=== -->
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