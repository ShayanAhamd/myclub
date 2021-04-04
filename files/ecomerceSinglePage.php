<?php 
session_start();
include_once './universalLinks.php';
$id = $_GET['id'];
include_once './session_id.php';
?>
<?php
    require_once "config.php";

    $sql = "SELECT * FROM `products` WHERE `id` = $id";
                                            
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $product_name = $row["name"];
            $category = $row["category"];
            $price = $row["price"];
            $quantity = $row["quantity"];
            $description = $row["description"];
            $additional_info = $row["additional_info"];

        }
    }
        
    $sql1 = "SELECT * FROM `product_images` WHERE `product_id` = $id";
        
    $result1 = $link->query($sql1);

    if ($result1->num_rows > 0) {
        // output data of each row
        while ($row1 = $result1->fetch_assoc()) {
                     

        $image1= $row1["image1"];
        $image2= $row1["image2"];
        $image3= $row1["image3"];
        $image4= $row1["image4"];
    
  
        }
     } 
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <!-- <link href="../css/mdb.min.css" rel="stylesheet"> -->
    <!-- Your custom styles (optional) -->
    <link href="../css/style.min.css" rel="stylesheet">


    <!-- .........External CSS For Header................. -->
    <link rel="stylesheet" href="../css/navbar.css">
    <!-- .........External CSS For Header................. -->

    <!-- ================================================= -->

    <!-- .........External CSS For Footer................. -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- .........External CSS For Footer................. -->

    <!-- .........External CSS For Page used in ecomerceMain................. -->
    <link rel="stylesheet" href="../css/ecomerceMain.css">
    <!-- .........External CSS For Page used in ecomerceMain................. -->

    <style>
    .alert_div {
        background: aliceblue;
        height: 40px;
        border-radius: 10px;
        border: 3px solid #a2cbef;
        display: none;
    }

    #closed {
        padding: 0;
        background-color: transparent;
        border: 0;
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5;
    }
    </style>

</head>

<body>

    <?php
        include_once './header.php';
    ?>
  <!-- CART -->
  <?php include_once './cart.php'; ?>
    <!-- Cart -->
    <!--Main layout-->
    <main class="mt-5 pt-4">
        <div class="container dark-grey-text mt-5">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <img src="<?php echo $imageUrl.$image1 ?>" class="img-fluid" alt="">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!-- Alert Box -->
                    <div class="container alert_div" id="alert_div">
                        <div class="row mt-1">
                            <div class="col-11">
                                <p id="show_data"></p>
                            </div>
                            <div class="col-1">
                                <button type="button" id="closed">&times;</button>
                            </div>
                        </div>
                    </div>

                    <!--Content-->
                    <div class="p-4">

                        <div class="mb-3">
                            <h1><?php echo $product_name; ?></h1>
                        </div>

                        <p class="lead">
                            <!-- <span class="mr-1">
                                <del></del>
                            </span> -->
                            <span>Rs <?php echo $price; ?></span>
                        </p>

                        <p class="lead font-weight-bold">Description</p>

                        <p> <?php echo $description; ?></p>

                        <div class="d-flex justify-content-left">
                            <!-- Default input -->
                            <input type="hidden" min="1" id="price" value="<?php echo $price; ?>">
                            <input type="hidden" min="1" id="session_id" value="<?php echo $session_id; ?>">
                            <input type="number" min="1" id="qty" max="<?php echo $quantity; ?>" value="1"
                                aria-label="Search" class="form-control" style="width: 100px">
                            <button class="btn btn-primary btn-md my-0 ml-3 add_product" id="<?php echo $id; ?>">Add to
                                cart
                                <i class="fa fa-shopping-cart ml-1"></i>
                            </button>

                        </div>

                    </div>
                    <!--Content-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row d-flex justify-content-center wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 text-center">

                    <h4 class="my-4 h4">Additional information</h4>

                    <p> <?php echo $additional_info; ?></p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row wow fadeIn">

                <?php if($image2 != ""){ ?>
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <img src="<?php echo $imageUrl.$image2 ?>" class="img-fluid" style="height:300px" alt="">

                </div>
                <!--Grid column-->
                <?php } ?>


                <?php if($image3 != ""){ ?>
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <img src="<?php echo $imageUrl.$image3 ?>" class="img-fluid" style="height:300px" alt="">

                </div>
                <!--Grid column-->
                <?php } ?>


                <?php if($image4 != ""){ ?>
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <img src="<?php echo $imageUrl.$image4 ?>" class="img-fluid" style="height:300px" alt="">

                </div>
                <!--Grid column-->
                <?php } ?>






            </div>
            <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->

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




    <!--Footer-->
    <?php
        include_once './footer.php';
    ?>
    <!--/.Footer-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- SCRIPTS -->
    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
    // Animations initialization
    new WOW().init();
    </script>

    <script>
    $(document).ready(function() {

        $("#closed").click(function() {
            $("#alert_div").slideUp(500);
        });

    });
    </script>
</body>

</html>


<script>
$(document).ready(function() {
    $('.add_product').click(function() {
        var id = $(this).attr("id");
        var qty = $('#qty').val();
        var price = $('#price').val();
        var session_id = $('#session_id').val();

        $.ajax({
            url: "addItem.php",
            method: "post",
            data: {
                id: id,
                qty: qty,
                price: price,
                session_id: session_id
            },

            success: function(response) {
                test = JSON.parse(response);
                $('#show_data1').html(test['cart']);
                $('#show_data').html(test['message']);
                $('#alert_div').slideDown(500);
            }
        });
    });
});
</script>