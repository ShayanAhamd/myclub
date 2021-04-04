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
    <!-- .........External CSS For Footer................. -->

    <!-- ================================================= -->

    <!-- ...............External CSS For Home............. -->
    <link rel="stylesheet" href="../css/covid-19.css">
    <!-- ...............External CSS For Home............. -->
    <!-- ================================================= -->



</head>

<body style="font-family: sans-serif;">
    <?php
        include_once './header.php';
        include_once './socialsidebar.php';
    ?>
    <!-- Button trigger modal -->
    <div class="container text-center spacing pb-3 mt-0">
        <span><a href="" class="saftey_link pr-3">CHILD SAFTEY</a></span> |
        <span><a href="" class="saftey_link_2 pl-3"> <b>OUR RESPONSE</b> </a></span>
        <span><a href="" class="saftey_link_2 pl-5">OUR PARTNERS</a></span>
        <span><a href="" class="saftey_link_2  pl-5">FAQS</a></span>
        <span><a href="" class="saftey_link_2  pl-5">MAKE A DONATION</a></span>
    </div>
    <!-- Button trigger modal -->
    <div class="container-fluid mission_img d-lg-block d-none">
        <div class="row">
            <div class="col-2"></div>
            <div class="row text-left">
                <div class="col-6 bg_black mt-0 mission_padng">
                    <h1 class="mission_hding">
                        COVID-19
                    </h1>
                    <p class="mission_para">
                        MY Club are Serving Local Communities During the Coronavirus Pandemic
                    </p>
                    <a href="./donatenow.php">
                        <button type="button" class="btn btn-primary video-btn">
                            DONATE NOW
                        </button>
                    </a>
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
                        COVID-19
                    </h1>
                </div>
                <div class="col-12">
                    <p class="mission_para">
                        MY Club are Serving Local Communities During the Coronavirus Pandemic
                    </p>
                </div>
                <div class="col-12">
                    <a href="./donatenow.php">
                        <button type="button" class="btn btn-primary video-btn">
                            DONATE NOW
                        </button>
                    </a>
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
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================/========================= -->
    <!-- ................................................. -->
    <!-- ========================/========================= -->
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-sm-12 col-md-7 col-lg-7 pl-0 pl-lg-5">
                <h4 class="president_hding text-center">
                    A message from our President and CEO, Jim Clark
                </h4>
                <!-- ......................Video...................... -->
                <div class="container-fluid text-center">
                    <div class="container pt-3 pl-0 pl-lg-3">
                        <div class="row">
                            <div class="col-12">
                                <div class='video-wrapper'>
                                    <div>
                                        <img class="img-fluid image-border" src="../images/img-gf.jpeg" width="100%"
                                            height="300px">
                                    </div>
                                    <div class='video-overlay'>
                                        <i class="fa fa-play-circle-o play-button2 video-btn1" aria-hidden="true"
                                            data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk"
                                            data-target="#myModal1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
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
                <!-- ......................Video...................... -->
                <p class="president_para pt-5 pl-3 pl-lg-0">
                    For 160 years, MY Club have navigated times of tragedy and crisis to provide safe places
                    for kids and teens. Today, we are committed more than ever, to ensure Club staff, members, families,
                    and communities have the resources and support they need to navigate these uncertain times – while
                    also partnering with state and local officials to do more.
                </p>
                <p class="president_para pl-3 pl-lg-0">
                    MY Club of Pakistan, in partnership the local Clubs, is building a national support
                    strategy to continue to ready Clubs to serve local communities during this global COVID-19 pandemic
                    – providing meals, programming, and support to those who need it most.
                </p>
                <p class="president_para pl-3 pl-lg-0">
                    Now more than ever we need our advocates, donors, and champions like you to join us. Thank you for
                    your support.
                </p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 border_left">
                <h4 class="president_hding">
                    COVID-19 Resources
                </h4>
                <div class="pt-4">
                    <a href="" class="links">How to talk to uour child about COVID-19</a>
                    <hr>
                    <a href="" class="links">Impact of Grief on Kids</a>
                    <hr>
                    <a href="" class="links">Youth & Safe Technology</a>
                    <hr>
                    <a href="" class="links">Is My Child Ok?</a>
                    <hr>
                    <a href="" class="links">Help Kids Create Healthy Habits</a>
                    <hr>
                    <a href="" class="links">Be There Initiative</a>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-12 text-center pt-5 pb-5">
            <h1 class="president_hding pb-3">
                Support efforts of MY Club
            </h1>
            <a href="./donatenow.php">
                <button type="button" class="btn_donate col-12 col-sm-12 col-md-6 col-lg-3">DONATE NOW</button>
            </a>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
    <div class="container-fluid video_bg d-lg-block d-none">
        <h1 class="text-center pt-5 president_hding">
            NEWS & STORIES
        </h1>
        <div class="container pt-3">
            <div class="row">
                <div class="col-1"></div>
                <?php
                    $sr= 1;
                require_once "config.php";

                $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 3";

                $result = $link->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?>
                <div class="col-3 mr-2">
                    <div class="" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo $imageUrl.$row["image"] ?>" height="200px"
                            alt="Card image cap">
                        <div class="card-body pl-0 pr-0">
                            <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>"
                                class="card-title card_links"><?php echo $row["title"] ?>
                            </a>
                            <span class="card-text cards_para">
                                <p><span class="font-italic">Posted by </span><span
                                        class="blue"><?php echo $row["posted_by"];?></span></p>
                            </span>
                            <p class="cards_para">
                                <?php echo $row["date"]; ?>
                            </p>
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
    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
    <!-- ================================================= -->
    <div class="container-fluid video_bg d-lg-none d-block">
        <div class="container video_bg">
            <h1 class="text-center pt-5 president_hding">
                NEWS & STORIES
            </h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../images/covid-19/GettyImages-1218212149_945x625.jpg"
                            alt="First slide">
                        <div class="card-body pl-0 pr-0">
                            <a href="#" class="card-title card_links">goPuff to Match up to $1 Million in Support of
                                MY Club COVID-19 Relief Fund.
                            </a>
                            <span class="card-text cards_para">
                                Fund will provide critical support to youths, families and communities nationwide.
                            </span>
                            <p class="cards_para">
                                04/23/2020
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/covid-19/Making-Face-Shields_IMG_2580_CC_945x625.jpg"
                            alt="Second slide">
                        <div class="card-body pl-0 pr-0">
                            <a href="#" class="card-title card_links">
                                Club Uses High-Tech Equipment to Create Medical Face Shields
                            </a>
                            <span class="card-text cards_para">
                                MY Club of Parkersburg has repurposed its design workshop to create personal
                                protective equipment
                            </span>
                            <p class="cards_para">
                                04/21/2020
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/covid-19/Quarantine-Pic-Meghan-Sweet_945x625.jpg"
                            alt="Third slide">
                        <div class="card-body pl-0 pr-0">
                            <a href="#" class="card-title card_links">
                                Hope is Not Cancelled: Supporting Families on the Frontlines
                            </a><br>
                            <span class="card-text cards_para">
                                The resiliency and determination that define MY Club across the country has
                                never been stronger
                            </span>
                            <p class="cards_para">
                                04/09/2020
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
    <div class="container text-center pb-5">
        <h1 class="president_hding pt-5">
            IN the Media
        </h1>
        <div class="container pl-5 pr-5 ">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3">
                    <img src="../images/images/img-rsd.jpeg" alt="" height="150px" width="100%">
                    <a href="#" class="cards_links">
                        MYC Greater Houston partners with Houston Food Bank
                    </a>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <img src="../images/covid-19/NFL_Image_325x215.jpg" alt="" width="100%">
                    <a href="#" class="cards_links">
                        NFL and its charitable partners make online learning resources available
                    </a>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <img src="../images/covid-19/NBC-15_Image_325x215.jpg" alt="" width="100%">
                    <a href="#" class="cards_links">
                        MYC Dane County raises funds for families impacted by virus
                    </a>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <img src="../images/images/img-hgfh.jpeg" height="150px" alt="" width="100%">
                    <a href="#" class="cards_links">
                        MYC listed as one of the main charities to donate to to help families during outbreak
                    </a>
                </div>
            </div>
        </div>
        <div class="container pt-5 pr-5 pl-5 pb-5">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3">
                    <img src="../images/covid-19/COVID_Sample_Image_325x215.jpg" alt="" width="100%">
                    <a href="#" class="cards_links">
                        Helping Out During The Coronavirus Crisis
                    </a>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <img src="../images/covid-19/APP_Image_325x215.jpg" alt="" width="100%">
                    <a href="#" class="cards_links">
                        MYC Monmouth County starts virtual offerings for kids
                    </a>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <img src="../images/images/img-fgk.jpeg" alt="" height="150px" width="100%">
                    <a href="#" class="cards_links">
                        Club closes but offers free meals
                    </a>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <img src="../images/covid-19/Food_Image_325x215.jpg" alt="" width="100%">
                    <a href="#" class="cards_links">
                        MY Club of Martin County still giving meals to kids in need
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
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