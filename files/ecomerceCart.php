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
    <link rel="stylesheet" href="../css/cart.css">
    <!-- .........External CSS For Page................. -->

    <!-- ================================================= -->
    <style>
         .alert_div {
        background: aliceblue;
        height: 40px;
        border-radius: 10px;
        border: 3px solid #a2cbef;
        display: none;
        width: 50%;
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
    <input type="hidden" min="1" id="session_id" value="<?php echo $session_id; ?>">

 


    <!-- Import Header -->
    <?php include_once './header.php'; ?>
    <!-- Import Header -->

      <!-- CART -->
  <?php include_once './cart.php'; ?>
    <!-- Cart -->
    <h1 class="text-center mb-5">Shopping Cart</h1>
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
    <div class="container my-5">
       
        <div class="row">
            <div class="col-12">
                <div class="shopping-cart">

                    <div class="column-labels">
                        <label class="product-image">Image</label>
                        <label class="product-details">Product</label>
                        <label class="product-price">Price</label>
                        <label class="product-quantity">Quantity</label>
                        <label class="product-removal">Remove</label>
                        <label class="product-line-price">Total</label>
                    </div>




                    <?php
            require_once "config.php";
            $sub_total = 0;
            $sql1 = "SELECT * FROM `cart` WHERE `session_id` = '$session_id'";
                
            $result1 = $link->query($sql1);

            if ($result1->num_rows > 0) {
                // output data of each row
                while ($row1 = $result1->fetch_assoc()) {
                    $product_id = $row1["product_id"];
                    $quantity = $row1["quantity"];
                    $purchasing_price = $row1["purchasing_price"];


                    $sql2 = "SELECT * FROM `products` WHERE `id` = $product_id";
                
                    $result2 = $link->query($sql2);

                    if ($result2->num_rows > 0) {
                        // output data of each row
                        while ($row2 = $result2->fetch_assoc()) {
                            ?>
                    <div class="product">
                        <div class="product-image">

                            <?php
                      
                        require_once "config.php";
                     
                            
                            $sql3 = "SELECT * FROM `product_images` WHERE `product_id` = $product_id";
                            
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
                        <div class="product-details">
                            <div class="product-title"><?php echo $row2["name"]; ?></div>
                            <p class="product-description"><?php echo $row2["description"]; ?></p>
                        </div>
                        <div class="product-price"><?php echo $purchasing_price; ?></div>
                        <div class="product-quantity">
                            <input type="number" class="change-quantity" id="<?php echo $product_id; ?>"
                                value="<?php echo $quantity; ?>" min="1" max="<?php echo $row2["quantity"]; ?>">
                        </div>
                        <div class="product-removal">
                            <button class="remove-product" id="<?php echo $product_id; ?>">
                                Remove
                            </button>
                        </div>
                        <div class="product-line-price"><?php echo $purchasing_price*$quantity; ?></div>

                        <?php $sub_total = $sub_total + ($purchasing_price*$quantity); ?>
                    </div>

                    <?php
                        }
                    }
                }
                
                }
                 ?>

                    <div class="totals">
                        <div class="totals-item">
                            <label>Subtotal</label>
                            <div class="totals-value" id="cart-subtotal"><?php  echo $sub_total; ?></div>
                        </div>

                        <!-- <div class="totals-item">
                            <label>Shipping</label>
                            <div class="totals-value" id="cart-shipping">0</div>
                        </div>
                        <div class="totals-item totals-item-total">
                            <label>Grand Total</label>
                            <div class="totals-value" id="cart-total"><?php  echo $sub_total; ?></div>
                        </div> -->
                    </div>

                    <a href="./ecomerceCheckout.php"><button class="checkout">Checkout</button></a>

                </div>
            </div>
        </div>
    </div>



    <!-- Import Footer -->
    <?php include_once './footer.php'; ?>
    <!-- Import Footer -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script src="../js/cart.js"></script>

    <script>
    $(document).ready(function() {

        $("#closed").click(function() {
            $("#alert_div").slideUp(500);
        });

    });
    </script>


    <script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    <!-- Delete Product Form Cart -->
    <script>
    $('.remove-product').click(function() {
        var id = $(this).attr("id");
     
        var session_id = $('#session_id').val();
    
        $.ajax({
            url: "deleteCartItem.php",
            method: "post",
            data: {
                id: id,
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
    </script>


    <!-- Change Quantity -->


    <script>
    $('.change-quantity').change(function() {
        var id = $(this).attr("id");
        var max = $(this).attr("max");
        var qty = $(this).val();
        var session_id = $('#session_id').val();

        $.ajax({
            url: "changeCartItem.php",
            method: "post",
            data: {
                id: id,
                session_id: session_id,
                qty: qty
            },

            success: function(response) {
                $('#show_data').html(response);
                 $('#alert_div').slideDown(500);
            }
        });


    });
    </script>
</body>

</html>