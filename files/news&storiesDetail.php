<?php
    session_start();
    include_once './universalLinks.php';
    require_once "config.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM `news_stories` WHERE `id`='$id'";

    $result = $link->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $image = $imageUrl.$row["image"];
        $image_alt = $row["image_alt"];
        $category = $row["category"];
        $title= $row["title"];
        $detail = $row["details"];
        $date = $row["date"];
        $posted_by = $row["posted_by"];
    }
        } 
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

    <!-- .........External CSS For Home.......... -->
    <link rel="stylesheet" href="../css/news&stories.css">
    <!-- .........External CSS For Home.......... -->


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

                        <a class="navbar-brand text-uppercase header-title" href="./news&stories.php">News & Stories</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <!-- <span class="navbar-toggler-icon"></span> -->
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav header-list w-100">
                                <li class="nav-item mx-auto active ">
                                    <a class="nav-link" href="./news&storiesCategory.php?category=Our Experts">Our Experts</a>
                                </li>
                                <li class="nav-item mx-auto active">
                                    <a class="nav-link" href="./news&storiesCategory.php?category=Club Stories">Club Stories</a>
                                </li>
                                <li class="nav-item mx-auto active ">
                                    <a class="nav-link" href="./news&storiesCategory.php?category=Teen Voices">Teen Voice</a>
                                </li>
                                <li class="nav-item mx-auto active ">
                                    <a class="nav-link" href="./news&storiesCategory.php?category=Parent Resources">Parent Resources</a>
                                </li>
                                <li class="nav-item mx-auto active ">
                                    <a class="nav-link" href="./news&storiesCategory.php?category=Alumni">Alumni</a>
                                </li>
                                <li class="nav-item mx-auto active ">
                                    <a class="nav-link" href="./news&storiesCategory.php?category=Partner News">Partner News</a>
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
    <div class="container">
        <div class="w-md-75 mx-auto">
            <div class="row">
                <div class="col-12">
                    <img src="<?php echo  $image; ?>"
                        alt="Article Image" width='100%' height='450px'>
                    <span class='font-italic'><?php echo  $image_alt; ?></span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8">
                    <h3>
                    <?php echo  $title; ?>
                    </h3>
                    <p><span class="font-italic">Posted <?php echo  $date; ?> by </span><span class="blue"><?php echo $posted_by; ?></span></p>

                    <div class="mt-4 details">
                    <?php echo  $detail; ?>
                    </div>
                    <hr class='mt-4'>
                </div>
                <div class="col-md-4">
                    <div class="pt-3 list blue_bg_2 mr-2">
                        <h6 class="pl-2 text-white font-weight-bold">STAY INFORMED WITH NEWS AND UPDATES</h6>
                        <div class="input-group mb-3 ml-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text input_icon_1"><i class="fa fa-envelope input_icon_2" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" class="form-control input_form" placeholder="email address"
                                aria-label="Amount (to the nearest dollar)">
                        </div>
                        <button class="sign_up_header_btn w-50 btn ml-2 px-2">SIGN</button>
                    </div>
                    <h6 class="mt-4">If you like this post, you'll like:</h6>
                    <?php
                    require_once "config.php";
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 5";

                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                    ?>

                    <div class="mt-3">
                        <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?></a>
                    </div>

                    <?php 
                        }
                    } 
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ...................Section 2................ -->




    <?php
            include_once './footer.php';
        ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>