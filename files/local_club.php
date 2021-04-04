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

    <!-- ...............External CSS For Home............. -->
    <link rel="stylesheet" href="../css/local_club.css">
    <!-- ...............External CSS For Home............. -->
    <!-- ================================================= -->



</head>

<body style="font-family: sans-serif;">
    <?php
        include_once './header.php';
        include_once './socialsidebar.php';
    ?>
    <!-- Button trigger modal -->
    <div class="container-fluid mission_img d-lg-block d-none">
        <div class="row">
            <div class="col-2"></div>
            <div class="row text-left">
                <div class="col-8 bg_black mt-0 mission_padng">
                    <h1 class="mission_hding text-white">
                        Our Mission & Story
                    </h1>
                    <p class="mission_parav text-white">
                        For 1 year, Clubs have changed and saved lives.
                    </p>
                    <button type="button" class="btn video-btn" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                        TOUR A CLUB <i class="fa fa-play-circle-o" aria-hidden="true"
                            style="font-size:20px; font-weight:300 !important"></i>
                    </button>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-lg-none d-block">
        <div class="row">
            <div class="col-12 px-0">
                <img class="mission_img_1 px-0" src="../images/local_club/OurClubs_Hero_Desktop2.jpg" alt="">
            </div>
            <div class="col-12 blue_bg pt-5 pb-5">
                <div class="col-12">
                    <h1 class="mission_hding">
                        Our Mission & Story
                    </h1>
                </div>
                <div class="col-12">
                    <p class="mission_para">
                        For 1 year, Clubs have changed and saved lives.
                    </p>
                </div>
                <div class="col-12">
                    <button type="button" class="btn video-btn" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                        TOUR A CLUB <i class="fa fa-play-circle-o" aria-hidden="true"
                            style="font-size:20px; font-weight:300 !important"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">

                    <button type="button" class="closes" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 pl-2 pl-lg-5 pt-5">
                <div class="right_border">
                    <a href="" class="youth_text_link_1">Home</a> > <a href="" class="youth_text_link_1">About Us</a> >
                    <span>Local Clubss</span>
                    <h1 class="youth_hding pt-5">
                        Creating Great Futures for Youth.
                    </h1>
                    <p class="youth_para pt-2">
                        Clubs provide a fun, safe and constructive environment for kids and teens during out-of-school
                        hours. Community-based and led by professional staff, Clubs serve small towns, large
                        metropolitan areas, public housing communities, and Native populations.
                        They offer programs and services to help young people succeed
                        in school, develop leadership skills, and maintain healthy lifestyles.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 pt-0 pt-lg-5">
                <div class="container pt-5">
                    <div class="row">
                        <div class="col-12 col-lg-4 pt-0 pt-lg-4 text-center text-lg-left">
                            <div class="progress dark_blue">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value pading" style="background-color:rgb(0, 153, 216)">
                                    <img src="../images/local_club/Infograph_Book_icon.png" alt="" height="80px"
                                        width="80px" style="margin-bottom: 15px;margin-left: 15px; ;">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 pt-5">
                            <p class="giph_text_1">
                                Participants in the Project Learn program reported <span class="purple">87%</span>
                                fewer missed school days when compared with non-Club youth.
                            </p>
                            <p class="giph_text_5">
                                2020 National Youth Outcomes Report
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
    <div class="container-fluid video_bg pb-5">
        <hr style="border:1px solid rgb(220,215,214);" class="mb-0">
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-lg-4 pl-0 pl-lg-5">
                    <img src="../images/images/img-k.jpeg" alt="" width="100%">
                </div>
                <div class="col-12 col-lg-8 pt-3 pt-lg-1 pr-0 pr-lg-5">
                    <h1 class="img_hding">
                        Club Staff
                    </h1>
                    <p class="img_para">
                        MY Club are staffed by more than 58,000 passionate youth development professionals.
                        As caring mentors and program facilitators, they build ongoing, supportive relationships that
                        foster a sense of belonging and purpose for young people every day
                    </p>
                    <a href="./localclub_clubstaff.php">
                        <button class="learn_more" id="btn_club">
                            LEARN MORE
                        </button>
                    </a>
                </div>
            </div>
            <hr style="border:1px solid rgb(220,215,214);" class="mb-0">
        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-lg-4 pl-0 pl-lg-5">
                    <img src="../images/local_club/AllPrograms-hero-M767x390.jpg" alt="" width="100%">
                </div>
                <div class="col-12 col-lg-8 pt-3 pt-lg-1 pr-0 pr-lg-5">
                    <h1 class="img_hding">
                        Programs
                    </h1>
                    <p class="img_para">
                        Clubs offer a variety of tested, proven and nationally recognized programs designed to empower
                        kids and teens to excel in school, become good citizens and lead healthy, productive lives.
                        Programs are tailored to the local community and customized for each age group to meet the
                        interests and developmental needs of young people ages 6-18.
                    </p>
                    <a href="./programsOverview.php">
                        <button class="learn_more" id="btn_club">
                            LEARN MORE
                        </button>
                    </a>
                </div>
            </div>
            <hr style="border:1px solid rgb(220,215,214);" class="mb-0">
        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-lg-4 pl-0 pl-lg-5">
                    <img src="../images/local_club/NativeServices_Image_767.jpg" alt="" width="100%">
                </div>
                <div class="col-12 col-lg-8 pt-3 pt-lg-1 pr-0 pr-lg-5">
                    <h1 class="img_hding">
                        Clubs on Native Lands
                    </h1>
                    <p class="img_para">
                        MY Club serve nearly 90,000 Native youth in approximately 200 Clubs and 26 states,
                        representing nearly 100 different Pakistann Indian, Alaska Native, Pakistann Samoan, and Native
                        Hawaiian communities. Clubs provide culturally sensitive, targeted programs to help Native youth
                        do well in school, give back to their communities, and commit to their overall health.
                    </p>
                    <a href="./native_lands.php">
                        <button class="learn_more" id="btn_club">
                            LEARN MORE
                        </button>
                    </a>
                </div>
            </div>
            <hr style="border:1px solid rgb(220,215,214);" class="mb-0">
        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-lg-4 pl-0 pl-lg-5">
                    <img src="../images/local_club/MembershipBenefits_Image1_767.png" alt="" width="100%">
                </div>
                <div class="col-12 col-lg-8 pt-3 pt-lg-1 pr-0 pr-lg-5">
                    <h1 class="img_hding">
                        Membership Benefits
                    </h1>
                    <p class="img_para">
                        MY Club provide a safe, affordable place for kids and teens during critical
                        out-of-school time.
                    </p>
                    <button class="learn_more" id="btn_club">
                        LEARN MORE
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
    <div class="container-fluid ">
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
    </div>
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- ................................................. -->






    <?php
        include_once './footer.php';
    ?>







    <script>
    $(document).ready(function() {
        // Gets the video src from the data-src on each button
        var $videoSrc;
        $(".video-btn").click(function() {
            $videoSrc = $(this).attr("data-src");
            console.log("button clicked" + $videoSrc);
        });

        // when the modal is opened autoplay it
        $("#myModal").on("shown.bs.modal", function(e) {
            console.log("modal opened" + $videoSrc);
            // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
            $("#video").attr(
                "src",
                $videoSrc + "?autoplay=1&showinfo=0&modestbranding=1&rel=0&mute=1"
            );
        });

        // stop playing the youtube video when I close the modal
        $("#myModal").on("hide.bs.modal", function(e) {
            // a poor man's stop video
            $("#video").attr("src", $videoSrc);
        });

        // document ready
    });
    </script>

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