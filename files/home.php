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
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
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
    <link rel="stylesheet" href="../css/home.css">
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

                <img class="d-block w-100" src="../images/kids/BGCA_KINHero_WorkforceReadiness_Desktop_About.jpg"
                    alt="First slide" height="680px" width="1200px">

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/military + native/BGCA_Military_Hero_Desktop_2020_v2.jpg"
                    alt="Second slide" height="680px" width="1200px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/BGCA_NYOYHomeHero_Desktop_v1-2020.jpg" alt="Third slide"
                    height="680px" width="1200px">
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
    <!-- <div class="container-fluid text-center bg_black pt-5 pb-5">
            <div class="row">
                <div class="container">
                    <div class="col-12">
                        <span class="i_am">
                            I am a(n)
                        </span>
                        <div class="btn-group">
                            <button class="btn btn-secondary btn-lg dropdown-toggle parent" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Parent
                            </button>
                            <div class="dropdown-menu parent_sub">
                                <a class="dropdown-item parent_sub_txt" href="#">Parent</a>
                                <a class="dropdown-item parent_sub_txt" href="#">Teen</a>
                                <a class="dropdown-item parent_sub_txt" href="#">Educator</a>
                                <a class="dropdown-item parent_sub_txt" href="#">Alum</a>
                                <a class="dropdown-item parent_sub_txt" href="#">Supporter</a>
                            </div>
                        </div>
                        <button type="button" class="go ml-2">
                            <b>
                                GO
                            </b>
                        </button>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- .....................Carosel..................... -->
    <!-- ================================================= -->
    <!-- ................................................. -->
    <div class="container-fluid pt-5 pb-5 btm_border">
        <div class="row">
            <div class="col-sm-12 col-md-2 col-lg-2 text-center text-lg-right">
                <img src="../images/SaferChildhoods_Icon_60pW.png" alt="">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 pt-2 ">
                <p class="below_testi_text">
                    The safety and well-being of our MY Clubs family is our highest priority. Learn more
                    about what COVID-19 means for us.
                </p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 text-center text-lg-left">
                <a href="./covid-19.php">
                    <button class="learn">
                        LEARN MORE
                    </button>
                </a>
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ......................Video...................... -->
    <!-- ================================================= -->
    <div class="container-fluid pt-5  video_bg">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div>
                            <div class='video-wrapper'>
                                <div><img class="img-fluid image-border" src="../images/leadership/img-gf.jpeg"></div>
                                <div class='video-overlay'>
                                    <i class="fa fa-play-circle-o play-button2" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pr-5">
                        <h1 class="video_hding">
                            Whatever It Takes to Build Great Futures
                        </h1>
                        <p class="video_para">
                            There is no silver bullet to success. It takes an army of people, a safe environment,
                            high-quality programs and unique experiences to level the playing field for all kids.
                            MY Clubs don't just do one thing, we do whatever it takes to build great
                            futures for Pakistan's young people.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 pt-4 pb-5 closetext-center mx-auto">
            <a href="./overview.php">
                <button class="input-group-text learn_2 mx-auto">
                    LEARN MORE
                </button>
            </a>
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
                        <button type="button" class="btn_donate w-75">1,000</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2 p-0">
                        <button type="button" class="btn_donate w-75">2,000</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2 p-0">
                        <button type="button" class="btn_donate w-75">5,000</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2 p-0">
                        <button type="button" class="btn_donate w-75">10,000</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2 p-0">
                        <button type="button" class="btn_donate w-75">Others</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 text-center pt-4">
            <button class="btn_club" id="btn_club" disabled>
                DONATE NOW
            </button>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 text-center pt-4">
            <!-- <a href="" class=" donate_more">
                    MORE WAYS TO GIVE <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a> -->
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <div class="container pt-5 pb-5">
        <div class="col-12 text-center">
            <p class="difference_text">
                We're making a difference.
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="progress purple">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value" style="background-color:rgb(97,39,158)">
                                <img src="../images/Love_mug.png" alt="" height="100px" width="100px"
                                    style="margin-bottom: 15px;margin-left: 15px; ;">
                            </div>
                        </div>
                    </div>
                    <p class="giph_text_1 pl-5 pr-5">
                        <span class="purple">50%</span> of Club teens expect to graduate from high school and 80%
                        had submitted an applic-ation to a post-secondary education.

                    </p>
                    <p class="giph_text_4 pl-5 pr-4">
                        According to MYC youth outcome data
                    </p>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="progress blue">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value" style="background-color:rgb(129,188,0);">
                                        <img src="../images/Grad_Cap.png" alt="" height="100px" width="100px"
                                            style="margin-bottom: 17px;margin-left: 0px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="giph_text_2 pl-5 pr-5">
                        <span class="green">75%</span> of regularly attending members said they volunte-ered in
                        their community, Club, school or neighborhood at least once in the past year.
                    </p>
                    <p class="giph_text_4 pl-5 pr-4">
                        According to MYC youth outcome data
                    </p>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="progress yellow">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value" style="background-color:rgb(253,186,4);">
                                <img src="../images/People.png" class="img_fluid" alt="" height="100px" width="100px"
                                    style="margin-bottom: 15px;margin-left: 0px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="giph_text_3 pl-5 pr-5">
                            <span class="yellow">89%</span> of Club youth said they can stand up for what is right;
                            91% of Club youth reported that as a leader, they make sure everyone feels important.
                        </p>
                        <p class="giph_text_4 pl-5 pr-4">
                            According to MYC youth outcome data
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- ................................................. -->
    <div class="container-fluid donate_bg pt-5 pb-5">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 p-5">
                        <div class="container">
                            <div class="donate_bg">
                                <div class="card donate_bg" style="width: 100%; border:none">
                                    <img class="card-img-top" src="../images/images/img-sd.jpeg" height="300px"
                                        alt="Card image cap">
                                    <div class="card-body pl-0">
                                        <h5 class="card_1_hding">
                                            Women's History Month
                                        </h5>
                                        <p class="card_1_para">
                                            Empowering young girls with skills and opportunities
                                            to build strong, confident leaders.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-5">
                        <div class="container ">
                            <div class=" donate_bg">
                                <div class="card donate_bg" style="width:100%; border:none">
                                    <img class="card-img-top" src="../images/images/img-hgfh.jpeg" height="300px"
                                        alt="Card image cap">
                                    <div class="card-body pl-0">
                                        <h5 class="card_1_hding">
                                            Help Prioritize Youth
                                        </h5>
                                        <p class="card_1_para">
                                            Contact elected officials to urge them to prioritize
                                            youth during the Coronavirus response
                                        </p>
                                    </div>
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
    <div class="container-fluid pt-5 pb-5">
        <a href="./news&stories.php">
            <p class="text-center news">
                News & Stories
            </p>
        </a>
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
                    <div class="col-12 col-lg-4 p-0">
                        <div class="container">
                            <div class="">
                                <div class="card " style="width: 100%; border:none">
                                    <img class="card-img-top" src="<?php echo $imageUrl.$row["image"] ?>" height="250px"
                                        alt="Card image cap">
                                    <div class="card-body pl-0">
                                        <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>"
                                            class="card_2_hding ">
                                            <?php echo $row["title"] ?>

                                        </a>
                                        <p><span class="font-italic">Posted by </span><span
                                                class="blue"><?php echo $row["posted_by"];?></span></p>


                                        <p class="card_2_para">
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