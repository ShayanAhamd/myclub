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
    <link rel="stylesheet" href="../css/kids_workforce_readiness.css">
    <!-- .........External CSS For Home.......... -->


</head>

<body style="font-family: sans-serif;">
    <?php
            include_once './header.php';
            include_once './socialsidebar.php';
        ?>
    <!-- ================================================= -->
    <!-- .................Carosel..................... -->
    <div class="container pb-0">
        <div class="w-md-75 mx-auto my-auto">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand text-uppercase header-title kids_link" href="#"><b>KIDS IN NEED</b></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <!-- <span class="navbar-toggler-icon"></span> -->
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav header-list w-100">
                                <li class="nav-item mx-auto active w-100">
                                    <a class="nav-link saftey_link" href="./kids_saftey_threats.php">SAFTEY THREATS</a>
                                </li>
                                <li class="nav-item mx-auto active w-100">
                                    <a class="nav-link saftey_link" href="./kids_workforce_readiness.php"><b>W F READINESS</b></a>
                                </li>
                                <li class="nav-item mx-auto active w-100">
                                    <a class="nav-link saftey_link" href="./kids_cycle_of_inequity.php">CYCLES OF INEQUITY</a>
                                </li>
                                <li class="nav-item mx-auto active w-100">
                                    <a class="nav-link saftey_link" href="./kids_elevate_youth_voices.php">ELEVATE YOUTH VOICES</a>
                                </li>
                                <li class="nav-item mx-auto active w-100">
                                    <a class="nav-link saftey_link" href="./kids_mentorship_voice.php">MENTORSHIP VOID</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
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
                    <div class="col-12 col-lg-8 pl-5 pt-3 border_right">
                        <h1 class="video_hding">
                            Uncertain Future
                        </h1>
                        <p class="video_para">
                            The future is uncertain for millions of kids, even more so with education and support
                            systems disrupted by the COVID-19 pandemic. As millions of out-of-work Pakistanis look
                            toward recovery, young people need MY Club now more than ever to build the essential
                            skills they will need to succeed in a competitive workforce. With a safe space and positive
                            mentors to guide them, today’s youth will exceed beyond the circumstances that surround them
                            and meet the challenges of employers who are reimagining the future of jobs in Pakistan.
                        </p>
                        <a href="./programsWorkforceReadiness.php" class="kids_link">
                            Learn more about MY Club Workforce Readiness Programs
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 pt-4 pt-lg-0">
                        <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                            <div class="progress purple">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value" style="background-color:rgb(255,130,0)">
                                    <img src="../images/kids_workforce_readiness/Infograph_Talking_icon.png" alt=""
                                        height="60px" width="60px" style="margin-bottom: 15px;margin-left:1px;">
                                </div>
                            </div>
                        </div>
                        <p class="giph_text_4 pl-5 pr-5">
                            <span class="purple">93%</span> of employers consider communication an essential skill yet
                            only 49% find it in candidates.
                        </p>
                        <p class="giph_text_4 pl-5 pr-4">
                            Afterschool Alliance
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
                    Our Stories
                </h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row pl-4">
                        <div class="col-12 col-lg-4 pt-4">
                            <div class="main">
                                <img src="../images/images/img-jsd.jpeg" alt="Notebook"
                                    style="width:100%; height:250px">
                                <div class="content text-center">
                                    <h1>
                                        <a class="text">
                                            Order Up!
                                        </a>
                                    </h1>

                                </div>
                            </div>
                            <p class="story_text pt-3">
                                An innovative food truck program at a South Florida MY Club teaches teens much
                                more than how to flip a burger. It’s preparing them for the workplace—and for life.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 pt-4">
                            <div class="main">
                                <img src="../images/images/img-hgfh.jpeg" alt="Notebook"
                                    style="width:100%; height:250px">
                                <div class="content text-center">
                                    <h1>
                                        <a class="text">
                                            Moving On Up
                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <p class="story_text pt-3">
                                Financial literacy helped Tamara prepare for life after high school and beyond.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 pt-4">
                            <div class="main">
                                <img src="../images/images/img-mbc.jpeg" alt="Notebook"
                                    style="width:100%; height:250px">
                                <div class="content text-center">
                                    <h1>
                                        <a class="text">
                                            Creating Economic Oppertunity
                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <p class="story_text pt-3">
                                Workforce readiness programs are doing whatever it takes to position young people to
                                transcend the workforce skills gap.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- <div class="container pt-5 pr-5 pl-5 pb-5">
        <div class="col-12">
            <h1 class="video_hding">
                Resources
            </h1>
        </div>
        <div class="row pt-3 pr-5 pl-3">
            <div class="col-12">
                <p>
                    <a href="" class="link">
                        Download Workforce Readiness - Great Think White Paper
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
    <div class="container-fluid pt-5 bg_gray pb-5">
        <h1 class="text-center video_hding">
            How You Can Help
        </h1>
        <div class="row pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 text-center pt-3 pt-lg-0">
                        <img src="../images/overview2/HowHelp_Advocate_Image.png" alt="" width="100%">
                        <div class="col-12 text-center pt-3">
                            <a href="./advocacy.php">
                                <button type="button" class="btns">
                                    ADVOCATE
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-center pt-3 pt-lg-0">
                        <img src="../images/overview2/HowHelp_Donate_Image.png" alt="" width="100%">
                        <div class="col-12 text-center pt-3">
                            <a href="./donatenow.php">
                                <button type="button" class="btns">
                                    DONATE
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-lg-4 text-center pt-3 pt-lg-0">
                        <img src="../images/overview2/HowHelp_EmailSignUp_Image.png" alt="" width="100%">
                        <div class="col-12 text-center pt-3">
                            <button type="button" class="btns">
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
    <!-- <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
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
                    <div class="pl-5">
                        <button class="btn_club">
                            LEARN MORE
                        </button>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="container pt-5 pb-3 video_bg">
                        <div class="row">
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
    </div> -->
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