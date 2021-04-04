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


    <!-- For Main Header -->
    <div class="container-fluid">
        <div class="row">
            <div class="btn-group btn-group-justified w-100">
                <a href="#" class="btn blue_bg cat pt-3">
                    <h4 class="text-white"><i class="fa fa-bars" aria-hidden="true"></i> CATEGORIES</h4>
                </a>
            </div>

            <div class="col-md-12 shop-tab-container">
                <div class="row m-0 p-0">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3 d-none d-md-block shop-tab-menu">
                        <div class="list-group">
                            <a href="./ecomerceCategoryProducts.php?category=Cricket" class="list-group-item">
                                <h5><i class="fa fa-chevron-right" aria-hidden="true"></i> Cricket</h5>
                            </a>
                            <a href="./ecomerceCategoryProducts.php?category=Table Tennis" class="list-group-item">
                                <h5><i class="fa fa-chevron-right" aria-hidden="true"></i> Table Tennis</h5>
                            </a>
                            <a href="./ecomerceCategoryProducts.php?category=Basket Ball Kits" class="list-group-item">
                                <h5><i class="fa fa-chevron-right" aria-hidden="true"></i> Basket Ball Kits</h5>
                            </a>
                           
                            <a href="./ecomerceCategoryProducts.php?category=Horse Riding Kits" class="list-group-item">
                                <h5><i class="fa fa-chevron-right" aria-hidden="true"></i> Horse Riding Kits</h5>
                            </a>
                            <a href="./ecomerceCategoryProducts.php?category=Hicking" class="list-group-item">
                                <h5><i class="fa fa-chevron-right" aria-hidden="true"></i> Hicking</h5>
                            </a>
                            <a href="./ecomerceCategoryProducts.php?category=Shooting" class="list-group-item">
                                <h5><i class="fa fa-chevron-right" aria-hidden="true"></i> Shooting</h5>
                            </a>

                            <a href="./ecomerceCategoryProducts.php?category=Shirt Trousers" class="list-group-item">
                                <h5><i class="fa fa-chevron-right" aria-hidden="true"></i> Shirt & Trousers</h5>
                            </a>

                            <a href="./ecomerceAllProducts.php" class="list-group-item">
                                <h5><i class="fa fa-chevron-right" aria-hidden="true"></i> All Category</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 p-0 shop-tab">

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner carousel-inner2">
                                <div class="carousel-item active">
                                    <img class="w-100"
                                        src="https://static.vecteezy.com/system/resources/thumbnails/000/670/565/small_2x/Shopping_Online_Banner.jpg"
                                        alt="...">
                                    <div class="carousel-caption">
                                        <h2>Heading</h2>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100"
                                        src="https://thumbs.dreamstime.com/b/online-payment-banner-smartphone-credit-card-online-payment-banner-human-hands-holding-smartphone-credit-card-shopping-195185809.jpg"
                                        alt="...">
                                    <div class="carousel-caption">
                                        <h2>Heading</h2>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100"
                                        src="https://i.pinimg.com/originals/11/2c/26/112c2651887127444980479496d124cd.jpg"
                                        alt="...">
                                    <div class="carousel-caption">
                                        <h2>Heading</h2>
                                    </div>
                                </div>
                            </div>

                            <a class="left carousel-control carousel-controled" href="#carousel-example-generic"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="right carousel-control carousel-controled" href="#carousel-example-generic"
                                data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- For Main Header -->


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
                                    <div
                                        class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image">
                                            <?php
                                        require_once "config.php";

                                            
                                        $sql1 = "SELECT * FROM `product_images` WHERE `product_id` = $id";
                                            
                                        $result1 = $link->query($sql1);

                                        if ($result1->num_rows > 0) {
                                            // output data of each row
                                        while ($row1 = $result1->fetch_assoc()) {
                                            ?>
                                            <a href="ecomerceSinglePage.php?id=<?php echo $id ?>"> <img
                                                    src="<?php echo $imageUrl.$row1["image1"]; ?>" class="img-fluid"
                                                    alt="Product Image" /> </a>

                                            <?php  
                                        }
                                            } 
                                            ?>
                                        </div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price">Rs. <?php echo $row["price"]; ?></div>
                                            <div class="bbb_viewed_name"><a
                                                    href="ecomerceSinglePage.php?id=<?php echo $id ?>"><?php echo $row["name"]; ?></a>
                                            </div>
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

    <!-- For Second Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center py-3">
                <h2>Most Famous Products</h2>
                <div class="text-right">
                    <a href="./ecomerceAllProducts.php">
                        <h6 class="btn blue  font-italic">See All</h6>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            require_once "config.php";
            $shortLenght = 1;
            $sql1 = "SELECT `product_id`, COUNT(`product_id`) AS `cnt` FROM order_items GROUP BY `product_id` ORDER BY `cnt` DESC LIMIT 4";
                
            $result1 = $link->query($sql1);

            if ($result1->num_rows > 0) {
                // output data of each row
                while ($row1 = $result1->fetch_assoc()) {
                    $id = $row1["product_id"];

                    $sql2 = "SELECT * FROM `products` WHERE `id` = $id";
                
                    $result2 = $link->query($sql2);

                    if ($result2->num_rows > 0) {
                        // output data of each row
                        while ($row2 = $result2->fetch_assoc()) {
                            ?>


            <div class="col-sm-6 col-md-3">
                <article class="col-item">
                    <div class="photo">
                        <div class="options-cart-round">
                            <a href="ecomerceSinglePage.php?id=<?php echo $id ?>">
                                <button class="btn btn-default" style="background-color: white;" title="Add to cart">
                                    <span class="fa fa-shopping-cart"></span>
                                </button>
                            </a>
                        </div>
                        <?php
                       
                        require_once "config.php";

                            
                            $sql3 = "SELECT * FROM `product_images` WHERE `product_id` = $id";
                            
                            $result3 = $link->query($sql3);

                            if ($result3->num_rows > 0) {
                                // output data of each row
                                while ($row3 = $result3->fetch_assoc()) {
                                    ?>
                        <img src="<?php echo $imageUrl.$row3["image1"]; ?>" class="img-fluid" alt="Product Image" />

                        <?php
                                }
                            } 
                            ?>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price-details col-md-12">
                                <p class="description<?php echo $shortLenght; ?>"> <?php  echo $row2['description']; ?> </p>


                                <script>
                                function truncateText(selector, maxLength) {
                                    var element = document.querySelector(selector),
                                        truncated = element.innerText;

                                    if (truncated.length > maxLength) {
                                        truncated = truncated.substr(0, maxLength) + '...';
                                    }
                                    return truncated;
                                }

                                document.querySelector('.description<?php echo $shortLenght; ?>').innerText = truncateText('.description<?php echo $shortLenght; ?>', 70);
                                </script>
                                <?php $shortLenght+=1 ; ?>
                                <h1><?php echo $row2["name"]; ?></h1>
                                <span class="price-new">Rs. <?php echo $row2["price"]; ?></span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <?php
                        }
                    }
                }
                    } 
                    ?>



        </div>
    </div>
    <!-- For Second Section -->

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