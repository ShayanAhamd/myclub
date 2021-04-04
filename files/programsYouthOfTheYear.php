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
    <link rel="stylesheet" href="../css/news&stories.css">
    <link rel="stylesheet" href="../css/programsYouthOfTheYear.css">
    <!-- .........External CSS For Home.......... -->
    <style>

    </style>
</head>

<body style="font-family: sans-serif;">
    <?php
            include_once './header.php';
            include_once './socialsidebar.php';
        ?>


    <!-- ...................Section 1................ -->
    <div class="container">
        <div class="w-md-75 mx-auto">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand text-uppercase header-title" href="#">YOUTH OF THE YEAR</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <!-- <span class="navbar-toggler-icon"></span> -->
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav header-list w-100">
                                <li class="nav-item mx-auto active ">
                                    <a class="nav-link" href="#">ABOUT</a>
                                </li>
                                <li class="nav-item mx-auto active">
                                    <a class="nav-link" href="#">NATIONAL YOUTH OF THE YEAR</a>
                                </li>
                                <li class="nav-item mx-auto active ">
                                    <a class="nav-link" href="#">FINALIST</a>
                                </li>
                                <li class="nav-item mx-auto active ">
                                    <a class="nav-link" href="#">FINALISTS</a>
                                </li>
                                <li class="nav-item mx-auto active ">
                                    <a class="nav-link" href="#">LEGACY</a>
                                </li>
                                <li class="nav-item mx-auto active ">
                                    <a class="nav-link" href="#">EVENYS</a>
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


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                    src="https://www.bgca.org/-/media/Images/yoy/2020/BGCA_NYOYHero_Mobile_v2-2020.ashx"
                    alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Congratulations Josias R.</h5>
                    <p>2020-21 National Youth of the Year</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="../images/yoY/BGCA_YOYHero_Mobile_NMYOY.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Congratulations Bethany C.</h5>
                    <p>2020-21 National Youth of the Year</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="https://www.bgca.org/-/media/Images/yoy/2020/BGCA_YOYHero_Mobile_v1-2020-21.ashx"
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


    <!-- ...................Section 2................ -->
    <!-- ...................Section 3................ -->
    <div class="container mb-5 ">
        <div class="w-md-75 mx-auto " style="border-top: 2px solid #DCD7D6;border-bottom: 2px solid #DCD7D6;">
            <!-- Row 1 -->
            <div class="row my-3 ">
                <div style="width: 100%;">
                    <h2 class="my-5 dark-blue text-center">2020 Finalists</h2>
                </div>
                <div class="col-md-4 ">
                    <h6 class=" dark-blue text-center">Southwest Youth of the Year</h6>
                    <img src="../images/youth of the year/img1.jpeg" width="100%" height="400px" alt="">
                    <a href="" class="btn bttn my-2 text-uppercase">Laine-s.</a>
                </div>
                <div class="col-md-4 ">
                    <h6 class=" dark-blue text-center">Midwest Youth of the Year</h6>
                    <img src="../images/youth of the year/img2.jpeg" width="100%" height="400px" alt="">
                    <a href="" class="btn bttn my-2 text-uppercase">Tékeidra M.</a>
                </div>
                <div class="col-md-4 ">
                    <h6 class=" dark-blue text-center">Northeast Youth of the Year</h6>
                    <img src="../images/youth of the year/img3.jpeg" height="400px" width="100%" alt="">
                    <a href="" class="btn bttn my-2 text-uppercase">JOSIAS R.</a>
                </div>
            </div>

            <!-- row 2 -->
            <div class="row my-3 ">

                <div class="col-md-4 ">
                    <h6 class=" dark-blue text-center">Southeast Youth of the Year</h6>
                    <img src="../images/youth of the year/img4.png" width="100%" height="400px" alt="">
                    <a href="" class="btn bttn my-2 text-uppercase">Kimberly H.</a>
                </div>
                <div class="col-md-4 ">
                    <h6 class=" dark-blue text-center">Pacific Youth of the Year</h6>
                    <img src="../images/youth of the year/img5.jpeg" height="400px" width="100%" alt="">
                    <a href="" class="btn bttn my-2 text-uppercase">Mario L.</a>
                </div>
                <div class="col-md-4 ">
                    <h6 class=" dark-blue text-center">National Youth of the Year</h6>
                    <img src="../images/youth of the year/img6.jpeg" width="100%" height="400px" alt="">
                    <a href="" class="btn bttn my-2 text-uppercase">Bethany C.</a>
                </div>
            </div>
            <!-- row 2 -->
            <!-- <div class="row my-3 ">

                <div class="col-md-4 ">
                    <a href="" class="btn below-btn my-4 text-uppercase">2017 Finalists</a>
                </div>
                <div class="col-md-4 ">
                    <a href="" class="btn below-btn my-4 text-uppercase">2018 Finalists</a>
                </div>
                <div class="col-md-4 ">
                    <a href="" class="btn below-btn my-4 text-uppercase">2019 Finalists</a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- ...................Section 3................ -->

    <!-- ...................Section 4................ -->
    <div class="container mb-5 ">
        <div class="w-md-75 mx-auto ">
            <!-- Row 1 -->
            <div class="row my-3 ">
                <div style="width: 100%;">
                    <h2 class="my-5 dark-blue text-center">2020 Finalists</h2>
                </div>
                <div class="col-md-4 ">
                    <h6 class=" dark-blue text-center">Midwest Youth of the Year</h6>
                    <img src="../images/youth of the year/img7.jpeg" width="100%" height="400px" alt="">
                    <a href="" class="btn bttn my-2 text-uppercase">Laine-s.</a>
                </div>
                <div class="col-md-4 ">
                    <h6 class=" dark-blue text-center">Northeast Youth of the Year</h6>
                    <img src="../images/youth of the year/img8.jpeg" width="100%" height="400px" alt="">
                    <a href="" class="btn bttn my-2 text-uppercase">Tékeidra M.</a>
                </div>
                <div class="col-md-4 ">
                    <h6 class=" dark-blue text-center">Southeast Youth of the Year</h6>
                    <img src="../images/youth of the year/img9.jpeg" height="400px" width="100%" alt="">
                    <a href="" class="btn bttn my-2 text-uppercase">JOSIAS R.</a>
                </div>
            </div>

            <!-- row 2 -->
            <div class="row my-3 ">

                <div class="col-md-4 offset-md-2">
                    <h6 class=" dark-blue text-center">Overseas Youth of the Year</h6>
                    <img src="../images/youth of the year/img10.jpeg" width="100%" height="400px" alt="">
                    <a href="" class="btn bttn my-2 text-uppercase">Alyssa E.</a>
                </div>
                <div class="col-md-4 ">
                    <h6 class=" dark-blue text-center">Pacific Youth of the Year</h6>
                    <img src="../images/youth of the year/img11.jpeg" height="400px" width="100%" alt="">
                    <a href="" class="btn bttn my-2 text-uppercase">Azana Q.</a>
                </div>

            </div>
            <!-- row 2 -->
            <!-- <div class="row my-3 ">

                <div class="col-md-4 ">
                    <a href="" class="btn below-btn my-4 text-uppercase">2017 Finalists</a>
                </div>
                <div class="col-md-4 ">
                    <a href="" class="btn below-btn my-4 text-uppercase">2018 Finalists</a>
                </div>
                <div class="col-md-4 ">
                    <a href="" class="btn below-btn my-4 text-uppercase">2019 Finalists</a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- ...................Section 4................ -->




    <!-- ...................Section 5................ -->
    <div class="container-fuid bg_light_color mt-5 py-5" style="border-top: 2px solid #DCD7D6;">
        <div class="row w-100">
            <div class="col-md-6">
                <h6 class="my-5 font-weight-bold text-right">National Sponsor:</h6>
            </div>
            <div class="col-md-6">
                <img src="https://www.bgca.org/-/media/Images/yoy/TOYOTA_Logo_sponsor_325x66.ashx" class="my-3"
                    width="200px" alt="">
            </div>

        </div>


    </div>
    <!-- ...................Section 5................ -->

    <?php
            include_once './footer.php';
        ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>