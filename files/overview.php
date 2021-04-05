<?php
    session_start();
    include_once './universalLinks.php';
    require_once "config.php";
    ?>
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
    <link rel="stylesheet" href="../css/footer.css">
    <!-- .........External CSS For Footer................. -->

    <!-- ================================================= -->

    <!-- .........External CSS For Home.......... -->
    <link rel="stylesheet" href="../css/overview.css">
    <!-- .........External CSS For Home.......... -->


</head>

<body style="font-family: sans-serif;">
    <?php
        include_once './header.php';
        include_once './socialsidebar.php';
    ?>

    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- ................................................. -->

    <div class="container d-lg-block d-none">
        <div class="row">
            <img src="../images/overview/19-MKTG-0532-AmpersandOn301_v2.jpg" alt="" style="width:100%;">
            <div class="top-left text-left col-12 col-lg-4">
                <h1 class="about_us_hding">
                    About Us
                </h1>
                <p class="about_us_para_1">
                    Whatever it Takes to Build Great Futures.
                </p>
            </div>
            <div class="top-right text-right col-6 col-lg-4 pt-lg-5 pt-0 mt-0">
                <p class="about_us_para_2">
                    Muslim Youth & Safe Places & Guidance & Leadership
                </p>
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <div class="container d-lg-none d-block">
        <div class="row">
            <div class="col-12 text-left">
                <h1 class="about_us_hding">
                    About Us
                </h1>
                <p class="about_us_para_1">
                    Whatever it Takes to Build Great Futures.
                </p>
            </div>
            <div class="col-12 text-left">
                <p class="about_us_para_2 about_us_bg">
                    Muslim Youth & Safe Places & Guidance & Leadership
                </p>
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ......................Video...................... -->
    <!-- ================================================= -->
    <div class="container-fluid pt-5 pb-5 video_bg" style="border-top:2px solid rgb(212,215,217)">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div>
                            <div class='video-wrapper'>
                                <div>
                                    <img class="img-fluid image-border" src="../images/leadership/img-gf.jpeg">
                                </div>
                                <div class='video-overlay'>
                                    <i class="fa fa-play-circle-o play-button2 video-btn1" aria-hidden="true"
                                        data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk"
                                        data-target="#myModal1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-lg-6">
                        <div class='video-wrapper'>
                            <div>
                                <img class="img-fluid image-border"
                                    src="../images/club_impact/BGCA-1901-JANCAMPAIGN-IDM-Video-TimH.png" width="100%"
                                    height="300px">
                            </div>
                            <div class='video-overlay'>
                                <i class="fa fa-play-circle-o play-button2 video-btn1" aria-hidden="true"
                                    data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk"
                                    data-target="#myModal1"></i>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-12 col-lg-6 pr-5 pt-3">
                        <p class="text-left"
                            style="font-family: sans-serif;font-size: 18px;font-weight: 400;line-height: 30px;color:  rgb(51, 51, 51)">
                            We never take a single approach to help kids succeed. It takes caring mentors, such as our
                            trained Club staff. It takes a safe place, like our Clubs that are consistently there for
                            the kids they serve. It takes innovative, quality programs designed to empower youth to
                            excel in school and lead healthy, productive lives. We do whatever it takes to ensure all
                            kids have a great future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal1 -->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-12 col-lg-4 p-4">
                    <img src="../images/overview/SaferChildhoods_Icon_hor.png" alt="" width="100%">
                    <h1 class="safer_child_hding">
                        Safer Childhoods
                    </h1>
                    <p class="safer_child_para">
                        Providing safe and fun places for kids to grow and thrive.
                    </p>
                    <a href="./kids_saftey_threats.php">
                        <button class="input-group-text learn_2 mx-auto">LEARN MORE</button>
                    </a>
                </div>
                <div class="col-12 col-lg-4 p-4">
                    <img src="../images/overview/LifeEnhancingPrograms_Icon_hor.png" alt="" width="100%">
                    <h1 class="safer_child_hding">
                        Life-Enhancing Programs
                    </h1>
                    <p class="safer_child_para">
                        Delivering engaging programs focused on academics, health, and leadership.
                    </p>
                    <a href="./programsOverview.php">
                        <button class="input-group-text learn_2 mx-auto">LEARN MORE</button>
                    </a>
                </div>
                <div class="col-12 col-lg-4 p-4">
                    <img src="../images/overview/Mentorship_Icon_hor.png" alt="" width="100%">
                    <h1 class="safer_child_hding">
                        Caring Mentors
                    </h1>
                    <p class="safer_child_para">
                        Offering trained staff who guide, coach, and motivate kids to be successful.
                    </p>
                    <a href="./kids_mentorship_voice.php">
                        <button class="input-group-text learn_2 mx-auto">LEARN MORE</button>
                    </a>
                </div>
            </div>
            <hr style="border:1px solid rgb(220,215,214);">
        </div>
        <div class="container">
            <h1 class="news">
                Learn How We’re Doing Whatever It Takes
            </h1>
            <div class="row">
                <div class="col-12 col-lg-6 pt-4">
                    <div class="main p-0">
                        <img src="../images/img/img-df.jpg" alt="Notebook" height="400px" style="width:100%;">
                        <div class="content">
                            <a href="./our_mission.php" class="underline">
                                <h1 class="text pt-2">Our Mission & Story</h1>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pt-4">
                    <div class="main p-0">
                        <img src="../images/img/images.jfif" alt="Notebook" height="400px" style="width:100%;  ">
                        <div class="content">
                            <a href="./club_imapct.php" class="underline">
                                <h1 class="text pt-2">Club Impact</h1>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pt-4">
                    <div class="main">
                        <img src="../images/img/imgfi.jpg" alt="Notebook" height="400px" style="width:100%;  ">
                        <div class="content">
                            <a href="./local_club.php" class="underline">
                                <h1 class="text pt-2">Local Clubs</h1>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pt-4">
                    <div class="main">
                        <img src="../images/images/img-k.jpeg" alt="Notebook" height="400px" style="width:100%;  ">
                        <div class="content">
                            <a href="./leadership_boardofgoverners.php" class="underline">
                                <h1 class="text pt-2">Our Leadership Team</h1>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pt-4">
                    <div class="main">
                        <img src="../images/img/img-re.jpg" alt="Notebook" height="400px" style="width:100%;  ">
                        <div class="content">
                            <a href="./leadership_boardofgoverners.php" class="underline">
                                <h1 class="text pt-2">Our Board of Governors</h1>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pt-4">
                    <div class="main">
                        <img src="../images/img/parner-logos.jpg" alt="Notebook" height="400px" style="width:100%; ">
                        <div class="content">
                            <a href="./our_partners.php" class="underline">
                                <h1 class="text pt-2">Our Partners</h1>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pt-4">
                    <div class="main">
                        <img src="../images/img/img-IK.jpg" alt="Notebook" height="400px" style="width:100%; ">
                        <div class="content">
                            <a href="./news&stories.php" class="underline">
                                <h1 class="text pt-2">News & Stories</h1>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pt-4">
                    <div class="main">
                        <img src="../images/img/program.jpg" alt="Notebook" height="400px" style="width:100%;">
                        <div class="content">
                            <h1 class="text pt-2">Careers</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <div class="container-fluid pt-4 pb-4 donate_bg">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center ">
            <p class="donate_line_1">
                Every day, 11.3 million kids and teens leave school with no place to go.
            </p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <p class="donate_line_2">
                Your gift today can help change a child’s future.
            </p>

        </div>
        <div class="container ">
            <div class="text-center">
                <div class="row">
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2 p-0">
                        <button type="button" class="btn_donate w-75">500</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2 p-0">
                        <button type="button" class="btn_donate w-75">1000</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2 p-0">
                        <button type="button" class="btn_donate w-75">2000</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2 p-0">
                        <button type="button" class="btn_donate w-75">5000</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2 p-0">
                        <button type="button" class="btn_donate w-75">10000</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2 p-0">
                        <button type="button" class="btn_donate w-75">$Others</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 text-center pt-4">
            <button class="btn_club" id="btn_club">
                DONATE NOW
            </button>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 text-center pt-4">
            <a href="./waysToGive.php" class="donate_more">
                MORE WAYS TO GIVE <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- ................................................. -->

    <div class="container-fluid pt-5 pb-5">
        <p class="text-center news">
            News & Stories
        </p>
        <div class="row">
            <div class="container">
                <div class="row">

                    <?php
                              $sr= 1;
                            require_once "config.php";

                            $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 3";

                            $result = $link->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                ?>
                    <div class="col-12 col-lg-4 p-0 text-left">
                        <div class="container">
                            <div class="">
                                <div class="card " style="width: 100%; border:none">
                                    <img class="card-img-top" src="<?php echo $imageUrl.$row["image"] ?>" height="250px"
                                        alt="Card image cap">
                                    <div class="card-body pl-0" style="text-align:left !important;">
                                        <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>"
                                            class="card_2_hding text-left">
                                            <?php echo $row["title"] ?>

                                        </a>
                                        <p><span class="font-italic text-left">Posted by </span><span
                                                class="blue"><?php echo $row["posted_by"];?></span></p>


                                        <p class="card_2_para text-left">
                                            <?php echo $row["date"]; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                            }
                        }
                        ?>

                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="./news&stories.php" class="card_2_hding ">More News
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <hr style="border:1px solid rgb(220,215,214);" class="mb-0">
    <div class="container-fluid video_bg ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 text-left pl-5 pt-5">
                    <h1 class="child_saftey">
                        Child Safety is Our #1 Priority
                    </h1>
                    <p class="layer">
                        Layers of safety policies and guidelines create a safe, fun environment so kids can achieve.
                    </p>
                    <a href="./child_saftey.php">
                        <button class="learn">
                            LEARN MORE
                        </button>
                    </a>
                </div>
                <div class="container col-12 col-lg-5 pt-5 pb-3 pl-5">
                    <div class="row">

                        <div class="col-sm-12 col-md-12 col-lg-12 text-left">
                            <p class="video_hding">
                                Find a Club Near You.
                            </p>
                            <div class="col-sm-12 col-md-12 col-lg-12 text-left pl-0">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend zip_marker">

                                        <i class="fa fa-map-marker input-group-text zip_marker" aria-hidden="true"></i>
                                    </div>
                                    <input onkeyup="validate()" id="zip_form" type="text" class="form-control zip_form"
                                        placeholder="Enter ZIP" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 text-left pl-0">
                                <button class="btn_club" id="btn_club">
                                    FIND A CLUB
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        include_once './footer.php';
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <!-- ............. -->
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