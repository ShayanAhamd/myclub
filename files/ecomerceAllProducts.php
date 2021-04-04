<?php
session_start();
include_once './universalLinks.php';
include_once './session_id.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store | MyClub</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!-- ................ For Carousel .................. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <!-- ................ For Carousel .................. -->


    <!-- .........External CSS For Header................. -->
    <link rel="stylesheet" href="../css/navbar.css">
    <!-- .........External CSS For Header................. -->

    <!-- ================================================= -->

    <!-- .........External CSS For Footer................. -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- .........External CSS For Footer................. -->


    <!-- .........External CSS For Page................. -->
    <link rel="stylesheet" href="../css/ecomerceMain.css">
    <!-- .........External CSS For Page................. -->

    <!-- ================================================= -->
</head>

<body>




    <!-- Import Header -->
    <?php include_once './header.php'; ?>
    <!-- Import Header -->
 <!-- CART -->
 <?php include_once './cart.php'; ?>
    <!-- Cart -->
    <!-- For Second Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center py-3">
                <h2>All Products</h2>
            </div>
        </div>
        <div class="row">

            <?php

function max_title_length($title){
    $max = 100;
   return substr( $title, 0, $max ). " &hellip;";
}

            require_once "config.php";

            $sql = 'SELECT * FROM `products` ORDER BY `id` DESC';
                
            $result = $link->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
   
                    ?>
            <div class="col-sm-6 col-md-3">
                <article class="col-item">
                    <div class="photo">
                        <div class="options-cart-round">
                        <a href="ecomerceSinglePage.php?id=<?php echo $row["id"] ?>">
                            <button class="btn btn-default" style="background-color: white;" title="Add to cart">
                                <span class="fa fa-shopping-cart"></span>
                            </button>
                            </a>
                        </div>
                        <?php
                            require_once "config.php";

                            $product_id = $row["id"];
                            $sql1 = "SELECT  * FROM `product_images` WHERE `product_id` =  '$product_id'";
                                
                            $result1 = $link->query($sql1);

                            if ($result1->num_rows > 0) {
                                // output data of each row
                                while ($row1 = $result1->fetch_assoc()) {
                                    ?>
                        <a href="#"> <img src="<?php echo $imageUrl.$row1["image1"]; ?>" class="img-fluid"
                                alt="Product Image" /> </a>

                        <?php  
                                }
                                    } 
                                    ?>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price-details col-md-12">
                                <p class="details">
                                    <?php 

                                 $description = $row['description'];

                                 

                                $test = max_title_length($description);

                                echo $test;

                           
                               
                                 ?>
                                </p>
                                <h1><?php echo $row["name"]; ?></h1>
                                <span class="price-new">Rs. <?php echo $row["price"]; ?></span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>


            <?php  
                }
                    } 
                  
                    ?>




        </div>
    </div>
    <!-- For Second Section -->


    <!-- For Trending Section -->
    <div class="bbb_viewed mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bbb_main_container">
                        <div class="bbb_viewed_title_container">
                            <h3 class="bbb_viewed_title">Best selling products</h3>
                            <div class="bbb_viewed_nav_container">
                                <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fa fa-chevron-left"></i></div>
                                <div class="bbb_viewed_nav bbb_viewed_next"><i class="fa fa-chevron-right"></i></div>
                            </div>
                        </div>
                        <div class="bbb_viewed_slider_container">
                            <div class="owl-carousel owl-theme bbb_viewed_slider">
                            <?php
                                require_once "config.php";

                                $sql = "SELECT * FROM `products` WHERE `first_page` = 1 ORDER BY `id` DESC";
                                    
                                $result = $link->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $id = $row["id"];
                                        ?>

                                <div class="owl-item">
                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><?php
                                    require_once "config.php";

                                        
                                    $sql1 = "SELECT * FROM `product_images` WHERE `product_id` = $id";
                                        
                                    $result1 = $link->query($sql1);

                                    if ($result1->num_rows > 0) {
                                        // output data of each row
                                        while ($row1 = $result1->fetch_assoc()) {
                                            ?>
                                                    <a href="ecomerceSinglePage.php?id=<?php echo $id ?>"> <img src="<?php echo $imageUrl.$row1["image1"]; ?>"
                                                            class="img-fluid" alt="Product Image" /> </a>

                                                    <?php  
                                        }
                                            } 
                                            ?>
                                        </div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price">Rs. <?php echo $row["price"]; ?></div>
                                            <div class="bbb_viewed_name"><a href="ecomerceSinglePage.php?id=<?php echo $id ?>"><?php echo $row["name"]; ?></a></div>
                                        </div>
                                        <!-- <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul> -->
                                    </div>
                                </div>
                                <?php  
                                    }
                                        } 
                                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- For Trending Section -->

    <!-- Import Footer -->
    <?php include_once './footer.php'; ?>
    <!-- Import Footer -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script src="../js/ecomerceMain.js"></script>

    <script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</body>

</html>