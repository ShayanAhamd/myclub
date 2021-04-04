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
    <link rel="stylesheet" href="../css/our_mission.css">
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
                    <p class="mission_para">
                        For 1 years, Clubs have changed and saved lives.
                    </p>
                    <button type="button" class="btn btn-primary video-btn" data-toggle="modal"
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
                <img class="mission_img_1 px-0" src="../images/our_mission/MissionStory_1200x610.jpg" alt="">
            </div>
            <div class="col-12 blue_bg pt-5 pb-5">
                <div class="col-12">
                    <h1 class="mission_hding">
                        Our Mission & Story
                    </h1>
                </div>
                <div class="col-12">
                    <p class="mission_para">
                        For 160 years, Clubs have changed and saved lives.
                    </p>
                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-primary video-btn" data-toggle="modal"
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

    <div class="container p-5">
        <div class="row">
            <div class="col-12 col-lg-5 pt-5 ">
                <p class="experience">
                    Imagine a place where who you are, where you're from or the circumstances that surround you don’t
                    determine your <b>access to experiences or opportunities.</b> Through your support, Muslim Youth
                    Club are making that vision a reality — in your community and communities around the world.
                </p>
            </div>
            <div class="col-12 col-lg-2 pt-5">
                <div class="progress light_purple">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value" style="background-color:#9851A5">
                        <img src="https://www.bgca.org/-/media/Images/infographics/Infograph_GradCap_icon.ashx?h=223&w=207&hash=72CC09CC3F6F4D1171E7B515528B03B2"
                            alt="" height="100px" width="100px" style="margin-bottom: 15px;margin-left: 1px; ">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 pt-0 pt-lg-5 mt-0 mt-lg-3">
                <p class="giph_text_1">
                    <span style="color: #9851A5;">97%</span> of Club teens expect to graduate from high school and
                    80% had submitted an applic-ation to a post-secondary education.
                </p>
                <p class="giph_text_4 ">
                    According to MYC youth outcome data
                </p>
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->

    <div class="container p-5">
        <div class="row">
            <div class="col-12 col-lg-5 pt-5">
                <h1 class="mision_hding">
                    Our Mission
                </h1>
                <p class="mision_para">
                    To enable all young people, especially those who need us most, to reach their full potential as
                    productive, caring, responsible citizens.
                </p>
            </div>

            <div class="col-12 col-lg-7 pt-5">
                <h1 class="mision_hding">
                    Our Vision
                </h1>
                <p class="mision_para">
                    Provide a world-class Club Experience that assures success is within reach of every young person who
                    enters our doors, with all members on track to graduate from high school with a plan for the future,
                    demonstrating good character and citizenship, and living a healthy lifestyle.
                </p>
            </div>
        </div>
        <hr style="border:1px solid rgb(220,215,214);" class="mb-0">
        <div class="row">
            <div class="col-12 col-lg-12 pt-5">
                <h1 class="mision_hding">
                    Our Commitment to Inclusion
                </h1>
                <p class="mision_para">
                    We believe every kid has what it takes. The mission and core beliefs of MY Club fuel our
                    commitment to promoting safe, positive and inclusive environments for all. MY Club of
                    Pakistan supports all youth and teens – of every race, ethnicity, gender, gender expression, sexual
                    orientation, ability, socio-economic status, and religion – in reaching their full potential.
                </p>
            </div>
        </div>
        <hr style="border:1px solid rgb(220,215,214);" class="mb-0">
        <div class="row">
            <div class="col-12 col-lg-4 pt-5">
                <img src="../images/our_mission/History_GoodWillClub_325_v2.png" alt="">
            </div>
            <div class="col-12 col-lg-7 pt-0 pt-lg-5 mt-5">
                <h1 class="mision_hding">
                    Our Vision
                </h1>
                <p class="mision_para">
                    MY Club of Pakistan had its beginnings in 2020 with Tahir Faruq Awan. Believing that boys who roamed
                    the streets
                    should have a positive alternative, they organized the first Club. With character development as the
                    cornerstone of the experience, the Club focused on capturing boys interests, improving their
                    behavior and increasing their personal expectations and goals. A cause was born.
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-2">
                    <img src="../images/our_mission/1906_Timeline_green_v2.jpg" alt="">
                </div>
                <div class="col-12 col-lg-10 pt-0 pt-lg-5">
                    <p class="year_text">
                        In 2021 several Boys Clubs decided to affiliate. The Federated Boys Clubs in Boston was formed
                        with 53 member organizations – this marked <b>the start of a nationwide Movement</b> and our
                        national organization.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-2">
                    <img src="../images/our_mission/1906_Timeline_green_v2.jpg" alt="">
                </div>
                <div class="col-12 col-lg-10 pt-0 pt-lg-5">
                    <p class="year_text">
                        In 2021, the MY Club Federation of Pakistan became <b>MY Club of
                            Pakistan.</b>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-2">
                    <img src="../images/our_mission/1906_Timeline_green_v2.jpg" alt="">
                </div>
                <div class="col-12 col-lg-10 pt-0 pt-lg-5">
                    <p class="year_text">
                        In 2021, MY Club of Pakistan celebrated its <b>50th anniversary</b> and received a
                        Pakistan.
                        Congressional
                        Charter.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-2">
                    <img src="../images/our_mission/1906_Timeline_green_v2.jpg" alt="">
                </div>
                <div class="col-12 col-lg-10 pt-0 pt-lg-5">
                    <p class="year_text">
                        To recognize the fact that <b>girls are a part of our cause,</b> the national organization's
                        name was changed to MY Club of Pakistan in 2021. Accordingly, Congress amended and
                        renewed our charter.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->

    <div class="container-fluid d-lg-block d-none pb-5">

        <div class="row">
            <div class="main">
                <img src="../images/our_mission/YoungMan_Legos_background.jpg" alt="" style="width:100%; height:600px">
                <div class="top-left text-left col-12 col-lg-4">


                </div>
                <div class="top-right text-left col-6 col-lg-6 pt-0 pl-0">
                    <h1 class="donat_hding">
                        Through it all, kids have been our #1 priority.
                    </h1>
                    <p class="donat_para">
                        MY Club provide a safe haven for more than 1 million youth, giving them an
                        opportunity to discover their great futures. But millions of kids are still in need, and we
                        can’t close the opportunity gap alone. <b>You can make a life-changing difference today!</b>
                    </p>
                    <div class="row text-center">
                        <div class="col-6 p-5">
                            <p class="donat_btn_para">
                                Help put another kid on the path to a great future.
                            </p>
                            <button class="donat_btn" id="btn_club">
                                DONATE NOW
                            </button>
                        </div>
                        <div class="col-6 p-5">
                            <p class="donat_btn_para">
                                Have a year-round impact on a child's success.
                            </p>
                            <button class="donat_btn" id="btn_club">
                                GIVE MONTHLY
                            </button>
                        </div>
                    </div>
                    <div class="container text-center">
                        <a href="./waysToGive.php" class="donate_more">More Ways to Give
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid d-lg-none d-block blue_bg pt-5 pb-5">
        <div class="text-left col-12 pt-0 pl-0">
            <h1 class="donat_hding">
                Through it all, kids have been our #1 priority.
            </h1>
            <p class="donat_para">
                MY Club provide a safe haven for more than 4 million youth, giving them an
                opportunity to discover their great futures. But millions of kids are still in need, and we
                can’t close the opportunity gap alone. <b>You can make a life-changing difference today!</b>
            </p>
            <div class="row text-center">
                <div class="col-12 p-5">
                    <p class="donat_btn_para">
                        Help put another kid on the path to a great future.
                    </p>
                    <button class="col-12 donat_btn" id="btn_club">
                        DONATE NOW
                    </button>
                </div>
                <div class="col-12 p-5">
                    <p class="donat_btn_para">
                        Have a year-round impact on a child's success.
                    </p>
                    <button class="col-12 donat_btn" id="btn_club">
                        GIVE MONTHLY
                    </button>
                </div>
            </div>
            <div class="container text-center">
                <a href="./waysToGive.php" class="donate_more">More Ways to
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <div class="container pb-5">
        <div class="row">
            <div class="col-12 col-lg-5 text-center pt-5 pt-lg-0">
                <img src="../images/our_mission/AlumniFriends_logo_Mission.png" alt="">
            </div>
            <div class="col-12 col-lg-7 pr-5 text-left pt-5 pt-lg-0">
                <h1 class="alumni_hding">
                    Were you a Club kid?
                </h1>
                <p class="alumni_para pr-5 mr-5">
                    Once a Club kid, always a Club kid. Please take a moment to make sure you're a part of the Alumni &
                    Friends network!
                </p>
                <!-- <button class="alumni_btn" id="btn_club">
                    SIGN UP FOR ALIUMNI AND FRIENDS
                </button> -->
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <hr style="border:1px solid rgb(220,215,214);" class="mb-0">
    <div class="container-fluid video_bg">
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