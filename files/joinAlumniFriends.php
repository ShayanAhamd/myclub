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
    <link rel="stylesheet" href="../css/advocacy.css">
    <link rel="stylesheet" href="../css/joinAlumniFriends.css">
    <!-- .........External CSS For Home.......... -->


</head>

<body style="font-family: sans-serif;">
    <?php
            include_once './header.php';
            include_once './socialsidebar.php';
        ?>


    <!-- ...................Section 1................ -->
    <div class="container mt-3">
        <div class="w-md-60 mx-auto">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand text-uppercase header-title" style="color:#3b7524;"
                            href="./advocacy.php">Alumni & Friends</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav header-list w-100">
                                <li class="nav-item mx-auto active ">
                                    <a class="nav-link" data-scroll-nav="0" href="#">About</a>
                                </li>
                                <li class="nav-item mx-auto active">
                                    <a class="nav-link" data-scroll-nav="1" href="#">Community</a>
                                </li>
                                <li class="nav-item mx-auto active">
                                    <a class="nav-link" data-scroll-nav="2" href="#">News & Stories</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ...................Section 1................ -->


    <!-- ...................Section 2................ -->
    <!-- ================================================= -->
    <!-- .................Carousel..................... -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                    src="../images/joinAlumniFriends/BGCA_AlumniHero_Desktop_OnceClubKid_9-19.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Congratulations Josias R.</h5>
                    <p>2020-21 National Youth of the Year</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="../images/joinAlumniFriends/BGCA_AlumniHero_Desktop_OnceClubKid_9-19.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Congratulations Bethany C.</h5>
                    <p>2020-21 National Youth of the Year</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/joinAlumniFriends/BGCA_HomeHeroYOY-ALUM_Desktop_v1.jpg"
                    alt="First slide">
                <div class="carousel-caption d-none d-md-block">

                    <h5>Honoring and celebrating </h5>
                    <p>the nation’s most inspiring teens</p>
                </div>
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

    <!-- .....................Carousel..................... -->
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ...................Section 2................ -->



    <!-- ...................Section 3................ -->
    <div class="container mt-5" data-scroll-index="0">
        <div class="w-md-80 mx-auto">
            <div class="row my-2">
                <div class="col-md-6">
                    <div class='s3_bg'>
                        <div class="play_btn my-auto">
                            <a href="#" class="round-button m-auto"><i class="fa fa-play play fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pt-3">
                    <h3 class="video_heading">
                        Alumni & Friends Community
                    </h3>
                    <p class="pt-2">
                        The difference between former and current Club kids? A few more years and a little more wisdom.
                        If you attended a Club, you are a Club alum. Join our growing community of former Club kids and
                        supporters who come from all walks of life but share a common bond through the Club Experience
                        and passion for the MY Club mission. Let's make a difference among the next generation
                        of Club kids together.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ...................Section 3................ -->


    <!-- ...................Section 4................ -->
    <div class="container-fluid upper_border bg_blue my-5" data-scroll-index="1">
        <div class="container w-75 mx-auto">
            <div class="row py-5">
                <div class="col-md-4">
                    <img src="https://bgca.org/-/media/Images/Alumni/19-ALUM-0514-BGCA-Alumn_JoinTheCommunity.ashx"
                        alt="1st">
                </div>
                <div class="col-md-4">
                    <img src="https://bgca.org/-/media/Images/Alumni/19-ALUM-0514-BGCA-Alumn_Advocate.ashx" alt="2nd">
                </div>
                <div class="col-md-4">
                    <img src="https://bgca.org/-/media/Images/Alumni/19-ALUM-0514-BGCA-Alumn_ShareYourStory.ashx"
                        alt="3rd">
                </div>
            </div>

        </div>
    </div>
    <!-- ...................Section 4................ -->

    <!-- ...................Section 5................ -->
    <div class="container my-5" data-scroll-index="2">
        <div class="container w-75 mx-auto">
            <div class="row py-5">
                <div class="col-md-8 h-100">
                    <h4 class="blue">Alumni News & Stories</h4>
                    <div class=" mt-50">
                        <p class="text-center">To get more updates about <span class="blue">Alumni</span> Visit: <br>
                            <a href="./news&stories.php" class="blue">
                                <button class="btn news_btn">
                                    News & Stories
                                </button>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg_lightblue px-2">
                        <h4 class="pt-3 text-white">Engage with Us</h4>
                        <div class="row text-white pt-2">
                            <div class="col-3 text-center">
                                <div class="bg_white radius-50 px-1 pt-1">
                                    <i class="fa fa-facebook-f fa-2x lightblue"></i>
                                </div>
                            </div>
                            <div class="col-9 my-auto">
                                <h6 class='my-auto font-weight-bold'>Like us on Facebook</h6>
                            </div>
                        </div>

                        <div class="row text-white pt-2 mt-3">
                            <div class="col-3 text-center ">
                                <div class="bg_white radius-50 px-1 pt-1">
                                    <i class="fa fa-instagram fa-2x lightblue"></i>
                                </div>
                            </div>
                            <div class="col-9 my-auto">
                                <h6 class='my-auto font-weight-bold'>Follow us on Instagram</h6>
                            </div>
                        </div>

                        <div class="row text-white pt-2 mt-3">
                            <div class="col-3 text-center">
                                <div class="bg_white radius-50 px-1 pt-1">
                                    <i class="fa fa-linkedin fa-2x lightblue"></i>
                                </div>
                            </div>
                            <div class="col-9 my-auto">
                                <h6 class='my-auto font-weight-bold'>Connect On LinkedIn</h6>
                            </div>
                        </div>

                        <div class="row text-white pt-2 pb-5 my-3">
                            <div class="col-3 text-center">
                                <div class="bg_white radius-50 pt-1">
                                    <i class="fa fa-youtube-play fa-2x lightblue"></i>
                                </div>
                            </div>
                            <div class="col-9 my-auto">
                                <h6 class='my-auto font-weight-bold'>View Alumni & Friends on YouTube</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...................Section 5................ -->


    <?php
        include_once './footer.php';
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- for smooth scrolling -->
    <script src="../js/scrollIt.js" type="text/javascript"></script>
    <!-- for smooth scrolling -->
    <script>
    $(function() {
        $.scrollIt();
    });
    </script>

</body>

</html>