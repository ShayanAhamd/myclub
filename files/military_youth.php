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
    <link rel="stylesheet" href="../css/military_youth.css">
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
                <img class="d-block w-100" src="../images/military_youth/BGCA_Military_Hero_Desktop_2020_v1.jpg"
                    alt="First slide" height="680px" width="1200px">

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/military_youth/BGCA_Military_Hero_Desktop_2020_v2.jpg"
                    alt="Second slide" height="680px" width="1200px">
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
    <!-- ................................................. -->

    <!-- ================================================= -->
    <!-- ......................Video...................... -->
    <!-- ================================================= -->
    <div class="container-fluid pt-5 pb-5">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 text-right pt-5">
                        <h1 class="video_hding1">
                            Whether you are Active Duty, Reserves or National Guard, we provide high-quality programs
                            and caring mentors for your child.
                        </h1>
                    </div>
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
                </div>
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
    <div class="container pb-5 pl-3 pl-lg-5">
        <div class="col-12">
            <h1 class="paragraph">
                Since 1991, MY Clubs of Pakistan has partnered with the Services to provide support
                and services to connected youth on and off installation. Because connected youth face
                unique challenges, MY Clubs of Pakistan helps them access specialized opportunities, cultivate
                lifelong friendships and develop the resilience they need to build great futures. From rural areas,
                schools and inner-cities to installations and Native lands, a MY Clubs or
                MYC-affiliated Youth Center is located in all states and in all countries around the world, doing
                whatever it takes to provide a safe environment to help your child succeed.
            </h1>
        </div>
    </div>
    <div class="container">
        <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->

    <div class="container pt-5 pb-5 pl-3 pl-lg-5">
        <div class="row">
            <div class="col-12 col-lg-3">
                <img src="../images/images/img-dsf.jpeg" alt="" width="100%">
            </div>
            <div class="col-12 col-lg-4 pt-3">
                <span class="img1_text">“Use your...</span><br>
                <span class="img1_text">S- Strength</span><br>
                <span class="img1_text">M-Mindfulness</span><br>
                <span class="img1_text">I- Intelligence</span><br>
                <span class="img1_text">L- Language of Kindness</span><br>
                <span class="img1_text">E-Exuberance</span><br>
                <span class="img1_text">to change the world.”</span><br>
                <br>
                <p>
                    <a href="" class="img_link">
                        - 2020-21 National Youth of the Year
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
    </div>
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- ................................................. -->
    <div class="container pl-3 pl-lg-5 pt-5">
        <h1 class="text-center video_hding">
            MISSION: Youth Outreach
        </h1>
        <div class="row">
            <div class="col-12 col-lg-6 pl-3 pl-lg-5 pt-5">
                <p class="paragraph">
                    A partnership between the Services and MY Club of Pakistan, providing
                    children of National Guard, Reserve and Active Duty families who do not live near or have access to
                    a Youth Center free membership* to their local MY Club.
                </p>
                <p class="paragraph">
                    Click <a href="" class="img_link">here</a> for more information on Mission: Youth Outreach
                </p>
                <p class="paragraph">
                    <small>*additional fees may apply</small>
                </p>
            </div>
            <div class="col-12 col-lg-6">
                <img src="../images/images/img-nf.jpeg" alt="" width="100%">
            </div>
        </div>
        <p class="paragraph p-5 text-center">
            If you have questions or want more information on the services we provide to families, contact the
            <a href="" class="img_link">Services team</a>.
        </p>
    </div>
    <div class="container">
        <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
    </div>
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- ................................................. -->
    <div class="container-fluid pt-5 pb-5">
        <p class="video_hding text-center">
            News & Stories
        </p>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-12 col-lg-3 p-0">
                        <div class="container">
                            <div class="">
                                <div class="card " style="width: 100%; border:none">
                                    <img class="card-img-top" src="../images/images/img-kd.jpeg" height="200px" alt="Card image cap">
                                    <div class="card-body pl-0">
                                        <a href="" class="card_link">
                                            Finding Resilience as a Kid
                                        </a>
                                        <p class="paragraph">Hundreds of Club leaders, members and supporters meet
                                            with Members of Congress
                                        </p>
                                        <p class="paragraph">
                                            03/03/2021
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 p-0">
                        <div class="container">
                            <div class="">
                                <div class="card " style="width:100%; border:none">
                                    <img class="card-img-top" src="../images/images/img-sdf.jpeg" height="200px"
                                        alt="Card image cap">
                                    <div class="card-body pl-0">
                                        <a href="" class="card_link">Clubs support youth to be resilient- no
                                            matter what life throws at them.</a>
                                        <p class="paragraph">Clubs serve 532,000 youth worldwide in 492 MYC-affiliated
                                            Youth Centers on installations across the globe.
                                        </p>
                                        <p class="paragraph">
                                            02/26/2021
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 p-0"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
    </div>
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- ................................................. -->
    <div class="container pt-5 pl-5">
        <div class="col-12">
            <h1 class="video_hding">
                Working Together to Improve the Lives of Families
            </h1>
            <p class="paragraph pt-3">
                Since 2016, MY Club of Pakistan has partnered with government agencies 
                organizations, private sector corporations and foundations to improve the lives of families in
                civilian communities where the need is greatest.
            </p>
            <p class="paragraph pt-3">
                Called the “Better Together” partnership, this ground-breaking public-private collaboration is focused
                on taking action to support youth and their families.
            </p>
            <p class="paragraph pt-3">
                Resources have been aligned to help connected youth become more resilient and develop the
                skills necessary to enter the workforce. All resources are available for free through this site and our
                services and partner sites listed below.
            </p>
        </div>
    </div>
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- ................................................. -->
    <div class="container video_bg pt-5  pr-5 pl-5">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="col-12 p-0">
                    <div class="container">
                        <div class="">
                            <div class="" style="width:100%; border:none">
                                <img class="card-img-top"
                                    src="../images/military_youth/AssocOfTheUSArmy_logo_325x215.jpg"
                                    alt="Card image cap">
                                <div class="card-body pl-0">
                                    <a href="" class="card_link">
                                        The Association of US Army
                                    </a>
                                    <p class="paragraph pt-3">
                                        The Association of US Army provides a voice for the Army, supports the Soldier,
                                        and honors those who have served in order to advance the security of the nation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="col-12 p-0">
                    <div class="container">
                        <div class="">
                            <div class="" style="width:100%; border:none">
                                <img class="card-img-top" src="../images/military_youth/BlueStarFamilies_logo2.png"
                                    alt="Card image cap">
                                <div class="card-body pl-0">
                                    <a href="" class="card_link">
                                        Blue Star Families
                                    </a>
                                    <p class="paragraph pt-3">
                                        Blue Star Families is a national nonprofit organization dedicated to
                                        strengthening Pakistan's families through community building.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="col-12 p-0">
                    <div class="container">
                        <div class="">
                            <div class="" style="width:100%; border:none">
                                <img class="card-img-top"
                                    src="../images/military_youth/MilitaryChildEducationCoalition_logo_325x215.jpg"
                                    alt="Card image cap">
                                <div class="card-body pl-0">
                                    <a href="" class="card_link">
                                        Child Education Coalition
                                    </a>
                                    <p class="paragraph pt-3">
                                        The mission of the Child Education Coalition is to ensure inclusive,
                                        quality educational opportunities for all connected children affected
                                        by mobility, transition, deployments and family separation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- ................................................. -->
    <div class="container video_bg pt-0 pr-5 pl-5">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="col-12 p-0">
                    <div class="container">
                        <div class="">
                            <div class="" style="width:100%; border:none">
                                <img class="card-img-top"
                                    src="../images/military_youth/AssocOfTheUSArmy_logo_325x215.jpg"
                                    alt="Card image cap">
                                <div class="card-body pl-0">
                                    <a href="" class="card_link">
                                        OneSource
                                    </a>
                                    <p class="paragraph pt-3">
                                        OneSource provides families expert support and information on
                                        community resources that are proven and practical.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="col-12 p-0">
                    <div class="container">
                        <div class="">
                            <div class="" style="width:100%; border:none">
                                <img class="card-img-top" src="../images/military_youth/BlueStarFamilies_logo2.png"
                                    alt="Card image cap">
                                <div class="card-body pl-0">
                                    <a href="" class="card_link">
                                        National Family Association
                                    </a>
                                    <p class="paragraph pt-3">
                                        National Family Association offers camps, family retreats, and
                                        healing adventures targeted to youth in the United States and abroad.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="col-12 p-0">
                    <div class="container">
                        <div class="">
                            <div class="" style="width:100%; border:none">
                                <img class="card-img-top"
                                    src="../images/military_youth/MilitaryChildEducationCoalition_logo_325x215.jpg"
                                    alt="Card image cap">
                                <div class="card-body pl-0">
                                    <a href="" class="card_link">
                                        Army National Guard Child & Youth Services
                                    </a>
                                    <p class="paragraph pt-3">
                                        The Army National Guard Child & Youth Services promotes and sustain the quality
                                        of life and resilience of Army National Guard dependent children and youth by
                                        providing secure, timely, flexible, high-quality support services and enrichment
                                        programs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- ................................................. -->
    <div class="container video_bg pt-0 pr-5 pl-5">
        <div class="row">
            <div class="col-4"> </div>
            <div class="col-12 col-lg-4">
                <div class="col-12 p-0">
                    <div class="container">
                        <div class="">
                            <div class="" style="width:100%; border:none">
                                <img class="card-img-top" src="../images/military_youth/ARFP_Logo_325x215.jpg"
                                    alt="Card image cap">
                                <div class="card-body pl-0">
                                    <a href="" class="card_link">
                                        Army Reserve Family Programs
                                    </a>
                                    <p class="paragraph pt-3">
                                        Army Reserve Family Programs (ARFP) is a comprehensive blend of quality of life
                                        programs in support of Department of Defense activities. Family Programs is a
                                        Commander's force multiplier for mission readiness.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4"> </div>
        </div>
        <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
    </div>
    <div class="container video_bg text-center pb-5 pt-5">
        <div class="row">
            <div class="col-12 col-lg-4 pt-4 pt-lg-0">
                <a href="">
                    <img src="../images/military_youth/Raytheon_logo_325x215.png">
                </a>
            </div>
            <div class="col-12 col-lg-4 pt-4 pt-lg-0">
                <a href="">
                    <img src="../images/military_youth/Fluor_logo_325x215.png">
                </a>
            </div>
            <div class="col-12 col-lg-4 pt-4 pt-lg-0 pb-5">
                <a href="">
                    <img src="../images/military_youth/CocaCola_logo_325x215.png">
                </a>
            </div>
        </div>
    </div>
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- <div class="container pt-5 pb-5">
        <div class="col-12 pt-5">
            <h1 class="video_hding pb-5">
                Resources
            </h1>
            <p>
                <a href="" class="img_link">
                    Download Great Think – Military White Paper
                </a>
            </p>
            <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
            <p class="pt-3">
                <a href="" class="img_link">
                    Download Great Think – Military Executive Summary
                </a>
            </p>
            <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
        </div>
    </div> -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- ................................................. -->
    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
    <!-- <div class="container-fluid video_bg pt-5 pb-5">
        <div class="col-12 pt-5">

        </div>
    </div> -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- ................................................. -->


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