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
    <link rel="stylesheet" href="../css/alumni_hall_of_fame.css">
    <!-- ...............External CSS For Home............. -->
    <!-- ================================================= -->



</head>

<body style="font-family: sans-serif;">
    <?php
        include_once './header.php';
        include_once './socialsidebar.php';
    ?>


    <div class="container-fluid pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 pl-0 pl-lg-5 border_right pt-5">
                    <h1 class="alumni_hding pl-0 pl-lg-5 pt-3">
                        Alumni Hall of Fame
                    </h1>
                    <p class="pl-0 pl-lg-5 alumni_para">
                        From Academy-Award winner Denzel Washington to National Youth of the Year winners, Muslim Youth
                        Club alumni across the world began the journey to their great future within Club walls. Muslim
                        Youth Clubs have been molding and influencing youth since 1860. Below are just a few of the many
                        alumni who were influenced by their hometown MY Club.
                    </p>
                    <!-- <p class="pl-0 pl-lg-5 alumni_para">
                        Are you a proud alumni or friend too?
                        <a href="" class="yearbook"> Sign the Yearbook.</a>
                    </p> -->
                </div>
                <div class="col-12 col-lg-6 pt-3">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class='video-wrapper'>
                                        <div>
                                            <img class="img-fluid image-border"
                                                src="../images/alumni_hall_of_fame/Video_AHOF_Sizzle_v2.png"
                                                width="100%" height="250px">
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
    </div>

    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <div class="container-fluid bg_blue text-center pt-4 pb-4">
        <div class="row">
            <div class="col-12">
                <h1 class="honerees_hding">
                    Congratulations to the 2019 Honorees
                </h1>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 pt-4">
                            <div class="main">
                                <img src="../images/leadership/anis.jpeg" alt="Notebook"
                                    style="width:100%; height:250px">
                                <div class="content">
                                    <h1>
                                        <a href="" class="text">
                                            Anis Ahmad
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 pt-4">
                            <div class="main">
                                <img src="../images/leadership/rehan.jpeg" alt="Notebook"
                                    style="width:100%; height:250px">
                                <div class="content">
                                    <h1>
                                        <a href="" class="text">
                                            Rehan Ahmad Khan
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 pt-4">
                            <div class="main">
                                <img src="../images/leadership/ishtiaq.jpeg" alt="Notebook"
                                    style="width:100%; height:250px">
                                <div class="content">
                                    <h1>
                                        <a href="" class="text">
                                            Ishtiaq Ahmad
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 pt-4">
                            <div class="main">
                                <img src="../images/leadership/khawaja.jpeg" alt="Notebook"
                                    style="width:100%; height:250px">
                                <div class="content">
                                    <h1>
                                        <a href="" class="text">
                                            Dr. Khawaja Zafar Ellahi
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-1 pt-4 mr-5"> </div>
                        <div class="col-12 col-lg-3 pt-4">
                            <div class="main">
                                <img src="../images/leadership/amjad.jpeg" alt="Notebook"
                                    style="width:100%; height:250px">
                                <div class="content">
                                    <h1>
                                        <a href="" class="text">
                                            Amjad Islam Amjad
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 pt-4">
                            <div class="main">
                                <img src="../images/leadership/haseeb.jpeg" alt="Notebook"
                                    style="width:100%; height:250px">
                                <div class="content">
                                    <h1>
                                        <a href="" class="text">
                                            Dr. Haseeb Warraich
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 pt-4">
                            <div class="main">
                                <img src="../images/leadership/wasiq.jpeg" alt="Notebook"
                                    style="width:100%; height:250px">
                                <div class="content">
                                    <h1>
                                        <a href="" class="text">
                                            Wasiq Tanweer Gondal
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <div class="container pb-5 pl-5">
        <div class="row">
            <div class="col-12 col-lg-6 pl-0 pl-lg-5">
                <div class="row">
                    <div class="col-12 col-lg-4 pt-5">
                        <a href="">
                            <img src="../images/leadership/tahir.jpeg" alt="" width="100%">
                        </a>
                    </div>
                    <div class="col-12 col-lg-8 pt-5">
                        <h1 class="vance_hding">
                            Tahir Faruq Awan
                        </h1>
                        <p class="vance_para pt-3">
                            MY Club of Pakistan Alumni Hall of Fame Ambassador
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 pt-5 pl-0">
                <a href="./our_partners.php">
                    <img src="../images/alumni_hall_of_fame/AlumniFriends-to-AHOF-image-link.jpg" alt="" width="100%">
                </a>
            </div>
        </div>
    </div>
    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
    <!-- ================================================= -->
    <!-- ................................................. -->
    <!-- ================================================= -->
    <!-- <div class="container-fluid video_bg pt-4 pb-5">
        <div class="row text-left pt-4">
            <div class="container">
                <div class="col-12 p-3 p-lg-5">
                    <p class="vance_para">
                        Meet our distinguished Alumni Hall of Fame honorees. From pro-athletes to accomplished
                        business leaders, Olympians to award-winning actors, each of these outstanding inductees first
                        got their start at their hometown MY Club!
                    </p>
                </div>
            </div>
        </div>
        <div class="container pl-5 pr-5">
            <div class="row">
                <div class="col-12 col-lg-3 pl-5">
                    <h1 class="alphabets pt-4 pb-4">
                        A
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Katrina Adams
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Rhett Akins
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            F. King Alexander
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Anthony Anderson
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Walter Anderson
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Chief Justice Harry Lee Anstead
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            John Antioco
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Darrell Armstrong
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Ed Arnold
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        B
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            James Barker
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Mayor Michael P. Bell
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Sharon Sayles Belton
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Brooke Bennett
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Candace Bird, Ph. D.
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Becky Bonner
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Matt Bonner
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Powers Boothe
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Larry Bossidy
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Thomas C. Brasuell
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            William R. Bricker
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            David Brugger
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Joe Burton
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        C
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Nick Cannon
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Mike Carey
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Earl Carlyss
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Gary Carter
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Ruth E. Carter
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Swin Cash
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Joaquin Castro
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Julian Castro
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Jim Caufield
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Gen. Wesley Clark (Ret.)
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Jim Collins
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Ray Combs
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Dave Condon
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Misty Copeland
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Lee Corso
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        D
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Willam M. Daley
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Eric Davis
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Terrell Davis
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            John Paul DeJoria
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Jason Derulo
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Wayne S. DeVeydt
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Frank DeVito
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Skylar Diggins-Smith
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Evan S. Dobelle
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Chris Doleman
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Ashanti Douglas
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Dr. Kenneth D. Dunn
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        E
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Sean Elliott
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Anthony Lee Ervin
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Damon Evans
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        F
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Jamie Farr
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Alex Filippenko
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Craig Fitzgerald
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Raymond Flynn
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Steve Foley
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                </div>
                <div class="col-12 col-lg-3 pl-5 pr-5 pr-lg-0 pt-4 pt-lg-0">
                    <h1 class="alphabets pt-4 pb-4">
                        G
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Robert Gamez
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Rear Adm. Earl Gay
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Ben Gazzara
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Alvin Gentry
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Michael Goldberg
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Luis Gonzalez
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Tony Gonzalez
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Cuba Gooding Jr.
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            James “Lou” Gorman
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Denyce Graves
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            A.C. Green
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Dennis Green
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Barry Griswell
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        H
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Dan Haren
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Maj. Gen. Charles Hines (Ret.)
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Hulk Hogan
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Chamique Holdsclaw
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Timothy Holland
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Maureen Holohan
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Evander Holyfield
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Joe Horn
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Ben Howland
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Cathy Hughes
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        I
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            The Hon. Tim Irwin
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        J
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Michael Jordan
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Jackie Joyner-Kersee
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        K
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Dr. Patrick Kelly
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Jim Keltner
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Bob Kersee
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Kool & The Gang
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Kelly Kulick
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        L
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Joe Lamond
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Bob Lanier
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Steve Largent
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Tony LaRussa
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Dante Lauretta, Ph. D.
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Blake Leeper
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            “Sugar” Ray Leonard
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Paul “Triple H” Levesque
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Damaris Lewis
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Dwight Douglas “D.D.” Lewis
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            David Lindsay-Abaire
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Jennifer Lopez
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Mario Lopez
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Sid Luckman
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Secretary Manuel Lujan Jr.
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        M
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            A.D. “Al” Mangini
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Jerry Maulden
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Gen. Darren W. McDew
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Willie McGinest
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Vince McMahon
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Sgt. Maj. Alford McMichael
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Eugene McQuade
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Sidney A. Moncrief
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Joe Morgan
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Johnny Morris
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Monique Mosley
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Arthur Myers
                        </a>
                    </p>
                </div>
                <div class="col-12 col-lg-3 pl-5 pr-5 pr-lg-0 pt-4 pt-lg-0">
                    <h1 class="alphabets pt-4 pb-4">
                        N
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Willie Naulls
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Chuck Nelson
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Greg Nelson
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Erle Nye
                        </a>
                    </p>
                    <h1 class="alphabets pt-4 pb-4">
                        O
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Lucille O’Neal
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Shaquille O’Neal
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Edward James Olmos
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        P
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Bill Perocchi
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Jimmy Piersall
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Ed Pinckney
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Lou Piniella
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Lee Pitts
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Terry Porter
                        </a>
                    </p>
                    <h1 class="alphabets pt-4 pb-4">
                        R
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Semeka Randall
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Jay Randolph
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Ahmad Rashad
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Usher Raymond IV
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Andre Reed
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Harold Reynolds
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            George Rivera
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Brig. Gen. Francis J. Roberts (Ret.)
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Brooks Robinson
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Frank Robinson
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Smokey Robinson
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Lt. Gen. Michael D. Rochelle
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Jimmy Rollins
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Rep. Fred Rooney
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Harris Rosen
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Bill Russell
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Johnny Rutherford
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        S
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Raphael Saadiq
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            CC Sabathia
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Joan Benoit Samuelson
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Under Secretary Francisco Sanchez
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Gale Sayers
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Philip S. Schein, M.D.
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Mark Schlereth
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Capt. Winston Scott (Ret.)
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Junior Seau
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            W. Errol Sewell
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Eric Shanks
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Bernard Shaw
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Richard Sheirer
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            C.J. “Pete” Silas
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            John Singleton
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Dennis Smith
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Lt. Gen. Leslie C. Smith
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Michael D. Smith
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Cmdr. Robert D. Smith
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            JB Smoove
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Trey Songz
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Norman H. Stamper
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Ernest Stevens Jr.
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Dave Stewart
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Dewey Stokes
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Ruben Studdard
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Robert Stutman
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                </div>
                <div class="col-12 col-lg-3 pl-5 pr-5 pr-lg-0 pt-4 pt-lg-0">
                    <h1 class="alphabets pt-4 pb-4">
                        T
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Frank Thomas
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            “Able” Mable Thomas
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Mike Tomlin
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Cmdr. Daniel J. Travers
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        U
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Terdema Ussery II
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        V
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Maj. Gen. Alfred A. Valenzuela
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Courtney B. Vance
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Manuel Villafana
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            The Hon. Antonio Villaraigosa
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        W
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Mark Wahlberg
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Bill Walton
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Denzel Washington
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Kerry Washington
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Spud Webb
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Shaun White
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Verdine White
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Dr. Dayna Wiedenkeller
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Lenny Wilkens
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Jamaal Wilkes
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Aaron S. Williams
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Dontrelle Willis
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Jason Witten
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            The Hon. Nelson W. Wolff
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            David L. Wolper
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Martin Wong
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            Bob Woolf
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <p class="pt-3">
                        <a href="" class="links_3">
                            James Worthy
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        Y
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Larry Young
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                    <h1 class="alphabets pt-4 pb-4">
                        Z
                    </h1>
                    <p>
                        <a href="" class="links_3">
                            Judith Zaffirini
                        </a>
                    </p>
                    <hr style="border:1px solid rgb(220,215,214);" class="mt-0 mb-0">
                </div>
            </div>
        </div>
    </div> -->

    <?php
        include_once './footer.php';
        include_once './socialsidebar.php';
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
</body>

</html>