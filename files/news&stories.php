<?php 
session_start();
include_once './universalLinks.php'

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


    <!-- ================================================= -->
    <!-- ...................Section 2................ -->
    <!-- ================================================= -->

    <div class="container">
        <div class="w-md-75 mx-auto">
            <div class="row my-3">

 <!-- ================================================= -->
    <!-- ...................News 1................ -->
    <!-- ================================================= -->
                <?php
                require_once "config.php";

                $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 1";

                $result = $link->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                ?>

                <div class="col-md-8">
                    <div class="bg_image w-100"
                        style="background-image: url('<?php echo $imageUrl.$row["image"] ?>')">
                        <div href="#" class='upper_layer'>
                            <div class="layer-text text-white pl-3">
                                <small class='font-italic'><?php echo $row["date"]; ?></small>
                                <div class='title t1'><?php echo $row["title"]; ?></div>
                                <script>
                                function truncateText(selector, maxLength) {
                                    var element = document.querySelector(selector),
                                        truncated = element.innerText;

                                    if (truncated.length > maxLength) {
                                        truncated = truncated.substr(0, maxLength) + '...';
                                    }
                                    return truncated;
                                }

                                document.querySelector('.t1').innerText = truncateText('.t1', 30);
                                </script>

                                <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>"><button class='btn btn-secondary mt-4 font-italic'><?php echo $row["category"]; ?></button></a>
                            </div>
                        </div>

                    </div>
                </div>

                <?php  
                }
                    } 
                    ?>
 <!-- ================================================= -->
    <!-- ...................News 2 ................ -->
    <!-- ================================================= -->
                <?php
                    require_once "config.php";

                    $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 1,1";

                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="card" style="width: 100%;">
                        <div class="card-img-top imgs"
                            style="background-image: url('<?php echo $imageUrl.$row["image"] ?>')">
                            <div href="./news&storiesDetail.php" class='upper_layer'></div>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $row["date"]; ?></p>
                            <h5 class="card-title t2"><?php echo $row["title"]; ?></h5>
                            <script>
                                function truncateText(selector, maxLength) {
                                    var element = document.querySelector(selector),
                                        truncated = element.innerText;

                                    if (truncated.length > maxLength) {
                                        truncated = truncated.substr(0, maxLength) + '...';
                                    }
                                    return truncated;
                                }

                                document.querySelector('.t2').innerText = truncateText('.t2', 30);
                                </script>
                            <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>" class="btn btn-secondary font-italic"><?php echo $row["category"]; ?></a>
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

  
    <!-- ...................Section 2................ -->


    <!-- ...................Section 3................ -->
    <div class="container">
        <div class="w-md-75 mx-auto">
            <div class="row my-3">

                <!-- ================================================= -->
                <!-- ...................News 3 ................ -->
                <!-- ================================================= -->
                <?php
                    require_once "config.php";
                   
                    $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 2,1";

                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-4">
                    <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>">
                        <div class="blues">
                            <small class="font-italic"><?php echo $row["date"]; ?></small>
                            <div class="title t3"><?php echo $row["title"]; ?></div>

                            <script>
                                function truncateText(selector, maxLength) {
                                    var element = document.querySelector(selector),
                                        truncated = element.innerText;

                                    if (truncated.length > maxLength) {
                                        truncated = truncated.substr(0, maxLength) + '...';
                                    }
                                    return truncated;
                                }

                                document.querySelector('.t3').innerText = truncateText('.t3', 30);
                                </script>
                            <div class="mt-2"><?php echo $row["category"]; ?></div>
                        </div>
                    </a>
                </div>
                <?php  
                }
                    } 
                    ?>
                <!-- ================================================= -->
                <!-- ...................News 4 ................ -->
                <!-- ================================================= -->
                <?php
                    require_once "config.php";

                    $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 3,1";

                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>                    
                <div class="col-md-4">
                    <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>">
                        <div class="purple">
                            <small class="font-italic"><?php echo $row["date"]; ?></small>
                            <div class="title t4"><?php echo $row["title"]; ?></div>
                            <script>
                                function truncateText(selector, maxLength) {
                                    var element = document.querySelector(selector),
                                        truncated = element.innerText;

                                    if (truncated.length > maxLength) {
                                        truncated = truncated.substr(0, maxLength) + '...';
                                    }
                                    return truncated;
                                }

                                document.querySelector('.t4').innerText = truncateText('.t4', 30);
                                </script>
                            <div class="mt-2"><?php echo $row["category"]; ?></div>
                        </div>
                    </a>
                </div>
                <?php  
                }
                    } 
                    ?>
                <!-- ================================================= -->
                <!-- ...................News 5 ................ -->
                <!-- ================================================= -->
                <?php
                    require_once "config.php";

                    $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 4,1";

                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>               
                <div class="col-md-4">
                    <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>">
                        <div class="green">
                            <small class="font-italic"><?php echo $row["date"]; ?></small>
                            <div class="title t5"><?php echo $row["title"]; ?></div>
                            <script>
                                function truncateText(selector, maxLength) {
                                    var element = document.querySelector(selector),
                                        truncated = element.innerText;

                                    if (truncated.length > maxLength) {
                                        truncated = truncated.substr(0, maxLength) + '...';
                                    }
                                    return truncated;
                                }

                                document.querySelector('.t5').innerText = truncateText('.t5', 30);
                                </script>
                            <div class="mt-2"><?php echo $row["category"]; ?></div>
                        </div>
                    </a>
                </div>
                <?php  
                }
                    } 
                    ?>               
            </div>
        </div>
    </div>
    <!-- ...................Section 3................ -->


    <!-- ...................Section 4................ -->
    <div class="container">
        <div class="w-md-75 mx-auto">
            <div class="row my-3">
             <!-- ================================================= -->
                <!-- ...................News 6 ................ -->
                <!-- ================================================= -->
                <?php
                    require_once "config.php";

                    $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 5,1";

                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?> 
               
                <div class="col-md-4 mt-2 mt-md-0">
                    <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>">
                        <div class="orange">
                            <small class="font-italic"><?php echo $row["date"]; ?></small>
                            <div class="title t6"><?php echo $row["title"]; ?></div>
                            <script>
                                function truncateText(selector, maxLength) {
                                    var element = document.querySelector(selector),
                                        truncated = element.innerText;

                                    if (truncated.length > maxLength) {
                                        truncated = truncated.substr(0, maxLength) + '...';
                                    }
                                    return truncated;
                                }

                                document.querySelector('.t6').innerText = truncateText('.t6', 30);
                                </script>
                            <div class="mt-2"><?php echo $row["category"]; ?></div>
                        </div>
                    </a>
                </div>
                <?php  
                }
                    } 
                    ?> 
                 <!-- ================================================= -->
                <!-- ...................News 7 ................ -->
                <!-- ================================================= -->
                <?php
                    require_once "config.php";

                    $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 6,1";

                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?> 
                <div class="col-md-8 mt-2 mt-md-0">
                    <div class="bg_image w-100"
                        style="background-image: url('<?php echo $imageUrl.$row["image"] ?>')">
                        <div href="#" class='upper_layer'>
                            <div class="layer-text text-white pl-3">
                                <small class='font-italic'><?php echo $row["date"]; ?></small>
                                <div class='title t7'><?php echo $row["title"]; ?></div>
                                <script>
                                function truncateText(selector, maxLength) {
                                    var element = document.querySelector(selector),
                                        truncated = element.innerText;

                                    if (truncated.length > maxLength) {
                                        truncated = truncated.substr(0, maxLength) + '...';
                                    }
                                    return truncated;
                                }

                                document.querySelector('.t7').innerText = truncateText('.t7', 30);
                                </script>
                                <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>"><button class='btn btn-secondary mt-4 font-italic purple_bg'><?php echo $row["category"]; ?></button></a>
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
    <!-- ...................Section 4................ -->


    <!-- ...................Section 5................ -->
    <div class="container">
        <div class="w-md-75 mx-auto">
            <div class="row my-3">
             <!-- ================================================= -->
                <!-- ...................News 8 ................ -->
                <!-- ================================================= -->
                <?php
                    require_once "config.php";

                    $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 7,1";

                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?> 
                <div class="col-md-8">
                    <div class="bg_image w-100"
                        style="background-image: url('<?php echo $imageUrl.$row["image"] ?>')">
                        <div href="#" class='upper_layer'>
                            <div class="layer-text text-white pl-3">
                                <small class='font-italic'><?php echo $row["date"]; ?></small>
                                <div class='title t8'><?php echo $row["title"]; ?></div>
                                <script>
                                function truncateText(selector, maxLength) {
                                    var element = document.querySelector(selector),
                                        truncated = element.innerText;

                                    if (truncated.length > maxLength) {
                                        truncated = truncated.substr(0, maxLength) + '...';
                                    }
                                    return truncated;
                                }

                                document.querySelector('.t8').innerText = truncateText('.t8', 30);
                                </script>
                                <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>"><button class='btn btn-secondary mt-4 font-italic purple_bg'><?php echo $row["category"]; ?></button></a>
                            </div>
                        </div>

                    </div>
                </div>
                <?php  
                }
                    } 
                    ?> 
                 <!-- ================================================= -->
                <!-- ...................News 9 ................ -->
                <!-- ================================================= -->
                <?php
                    require_once "config.php";

                    $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 8,1";

                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?> 
                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="card" style="width: 100%;">
                        <div class="card-img-top imgs"
                            style="background-image: url('<?php echo $imageUrl.$row["image"] ?>')">
                            <div href="#" class='upper_layer'></div>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $row["date"]; ?></p>
                            <h5 class="card-title t9"><?php echo $row["title"]; ?></h5>
                            <script>
                                function truncateText(selector, maxLength) {
                                    var element = document.querySelector(selector),
                                        truncated = element.innerText;

                                    if (truncated.length > maxLength) {
                                        truncated = truncated.substr(0, maxLength) + '...';
                                    }
                                    return truncated;
                                }

                                document.querySelector('.t9').innerText = truncateText('.t9', 30);
                                </script>
                            <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>" class="btn btn-secondary font-italic purple_bg"><?php echo $row["category"]; ?></a>
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
    <!-- ...................Section 5................ -->


    <!-- ...................Section 6................ -->
    <div class="container">
        <div class="w-md-75 mx-auto">
            <div class="row my-3">
             <!-- ================================================= -->
                <!-- ...................News 10 ................ -->
                <!-- ================================================= -->
                <?php
                    require_once "config.php";

                    $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 9,1";

                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?> 
                <div class="col-md-4">
                    <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>">
                        <div class="blues">
                            <small class="font-italic"><?php echo $row["date"]; ?></small>
                            <div class="title t10"><?php echo $row["title"]; ?></div>
                            <script>
                                function truncateText(selector, maxLength) {
                                    var element = document.querySelector(selector),
                                        truncated = element.innerText;

                                    if (truncated.length > maxLength) {
                                        truncated = truncated.substr(0, maxLength) + '...';
                                    }
                                    return truncated;
                                }

                                document.querySelector('.t10').innerText = truncateText('.t10', 30);
                                </script>
                            <div class="mt-2"><?php echo $row["category"]; ?></div>
                        </div>
                    </a>
                </div>
                <?php  
                }
                    } 
                    ?> 
                 <!-- ================================================= -->
                <!-- ...................News 11 ................ -->
                <!-- ================================================= -->
                <?php
                    require_once "config.php";

                    $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 10,1";

                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?> 
                <div class="col-md-4">
                    <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>">
                        <div class="purple">
                            <small class="font-italic"><?php echo $row["date"]; ?></small>
                            <div class="title t11"><?php echo $row["title"]; ?></div>
                            <script>
                                function truncateText(selector, maxLength) {
                                    var element = document.querySelector(selector),
                                        truncated = element.innerText;

                                    if (truncated.length > maxLength) {
                                        truncated = truncated.substr(0, maxLength) + '...';
                                    }
                                    return truncated;
                                }

                                document.querySelector('.t11').innerText = truncateText('.t11', 30);
                                </script>
                            <div class="mt-2"><?php echo $row["category"]; ?></div>
                        </div>
                    </a>
                </div>
                <?php  
                }
                    } 
                    ?> 
                 <!-- ================================================= -->
                <!-- ...................News 12 ................ -->
                <!-- ================================================= -->
                <?php
                    require_once "config.php";

                    $sql = "SELECT * FROM `news_stories` ORDER BY `id` DESC limit 11,1";

                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?> 
                <div class="col-md-4">
                    <a href="./news&storiesDetail.php?id=<?php echo $row["id"]; ?>">
                        <div class="green">
                            <small class="font-italic"><?php echo $row["date"]; ?></small>
                            <div class="title t12"><?php echo $row["title"]; ?></div>
                            <script>
                                function truncateText(selector, maxLength) {
                                    var element = document.querySelector(selector),
                                        truncated = element.innerText;

                                    if (truncated.length > maxLength) {
                                        truncated = truncated.substr(0, maxLength) + '...';
                                    }
                                    return truncated;
                                }

                                document.querySelector('.t12').innerText = truncateText('.t12', 30);
                                </script>
                            <div class="mt-2"><?php echo $row["category"]; ?></div>
                        </div>
                    </a>
                </div>
                <?php  
                }
                    } 
                    ?> 
            </div>
        </div>
    </div>
    <!-- ...................Section 6................ -->


    <?php
            include_once './footer.php';
        ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>