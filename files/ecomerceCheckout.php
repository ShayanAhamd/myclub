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

    <!-- .............MDBootstrap................ -->
    <link href="../css/ecomerceCheckout.css" rel="stylesheet">
    <!-- <link href="../css/style.min.css" rel="stylesheet"> -->
    <!-- .............MDBootstrap................ -->

    <!-- ================================================= -->
    <style>
    .hides1 {
        display: none;
    }
    </style>
</head>

<body>




    <!-- Import Header -->
    <?php include_once './header.php'; ?>
    <!-- Import Header -->
 <!-- CART -->
 <?php include_once './cart.php'; ?>
    <!-- Cart -->

    <!--Main layout-->
    <main class="mt-5 pt-4">
        <div class="container wow fadeIn">

            <!-- Heading -->
            <h2 class="my-5 h2 text-center">Confirm Shopping</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-8 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <form class="card-body" action="" method="POST" enctype="multipart/form-data">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6 mb-2">

                                    <!--firstName-->
                                    <div class="form-label-group">
                                        <input type="text" name="fname" id="fname" class="form-control" placeholder=""
                                            required="" autofocus="">
                                        <label for="fname">First Name</label>
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6 mb-2">

                                    <!--lastName-->
                                    <div class="form-label-group">
                                        <input type="text" name="lname" id="lname" class="form-control" placeholder=""
                                            required="" autofocus="">
                                        <label for="lname">Last Name</label>
                                    </div>

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--email-->

                            <div class="form-label-group">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="" required>
                                <label for="email">Phone Number</label>
                            </div>
                            <!--email-->

                            <div class="form-label-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder=""
                                    required>
                                <label for="email">Email Address</label>
                            </div>

                            <!--address-->
                            <div class="form-label-group">
                                <input type="text" name="address" id="address" class="form-control" placeholder=""
                                    required>
                                <label for="address">Address</label>
                            </div>

                            <!--address-2-->
                            <div class="form-label-group">
                                <input type="text" name="address2" id="address2" class="form-control" placeholder=""
                                    autofocus="">
                                <label for="address2">Address 2 (Optional)</label>
                            </div>

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-lg-4 col-md-12 mb-4">

                                    <label for="country">Country</label>
                                    <select class="custom-select d-block w-100" name="country" id="country" required>
                                        <option value="" disabled>Choose...</option>
                                        <option>Pakistan</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-lg-4 col-md-6 mb-4">

                                    <label for="state">State/Province</label>
                                    <select class="custom-select d-block w-100" name="state" id="state" required>
                                        <option value="" disabled>Choose...</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Sindh">Sindh</option>
                                        <option value="Kpk">Kpk</option>
                                        <option value="Blochistan">Blochistan</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-lg-4 col-md-6 mb-4">

                                    <label>Zip</label>
                                    <div class="form-label-group">
                                        <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                            autofocus="">
                                        <label for="zip">Zip Code</label>
                                        <div class="invalid-feedback">
                                            Zip code required.
                                        </div>
                                    </div>

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <hr>

                            <div class="d-block my-3">
                                <label for="">Payment Method</label>
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"
                                        value="cc" onchange="getRating(this)" checked required>
                                    <label class="custom-control-label" for="credit">Credit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" value="cod" type="radio"
                                        class="custom-control-input" onchange="getRating(this)" required>
                                    <label class="custom-control-label" for="debit">Cash On Delivery</label>
                                </div>
                            </div>
                            <div class="hides1">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-expiration">Delivery Charges</label>
                                        <input type="text" class="form-control" value="Delivery Charges Rs.200"
                                            readonly>


                                    </div>

                                </div>
                            </div>
                            <div class="hides">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-name">Name on card</label>
                                        <input type="text" class="form-control" name="cc_name" id="cc_name"
                                            placeholder="">
                                        <small class="text-muted">Full name as displayed on card</small>
                                        <div class="invalid-feedback">
                                            Name on card is required
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-number">Credit card number</label>
                                        <input type="text" class="form-control" name="cc_number" id="cc-number"
                                            placeholder="">
                                        <div class="invalid-feedback">
                                            Credit card number is required
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="cc-expiration">Expiration</label>
                                        <input type="text" class="form-control" name="cc_expiration"
                                            name="cc-expiration" id="cc-expiration" placeholder="">
                                        <div class="invalid-feedback">
                                            Expiration date required
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="cc-expiration">CVV</label>
                                        <input type="text" class="form-control" name="cc_cvv" id="cc-cvv"
                                            placeholder="">
                                        <div class="invalid-feedback">
                                            Security code required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" name="submit_btn" type="submit">Confirm
                                Order</button>

                        </form>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!-- Heading -->
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>

                        <?php 
                        require_once "config.php";
                        $sql = "SELECT COUNT(*) AS number FROM `cart` WHERE `session_id` = '$session_id'";
                
                        $result = $link->query($sql);
                   
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                ?>
                        <span class="badge badge-info badge-pill"><?php echo $row['number']; ?></span>
                        <?php
                            }
                        }
                            
                            ?>
                    </h4>

                    <!-- Cart -->
                    <ul class="list-group mb-3 z-depth-1">

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


                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?php echo $row2["name"]; ?></h6>
                                <small class="text-muted text-justify"><?php echo $row2["description"]; ?></small>
                            </div>
                            <span class="text-muted">
                                <?php echo 'Rs.'.($quantity*$purchasing_price);   ?>
                            </span>
                        </li>

                        <?php $sub_total = $sub_total + ($purchasing_price*$quantity); ?>


                        <?php
                                        }
                                    }
                                }
                                
                                }
                                ?>




                        <!-- <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">-$5</span>
                        </li> -->
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (PKR)</span>

                            <strong class="hides">Rs. <?php echo $sub_total; ?></strong>
                            <strong class="hides1">Rs. <?php echo $sub_total+200; ?></strong>
                        </li>
                    </ul>
                    <!-- Cart -->

                    <!-- Promo code -->
                    <!-- <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Redeem</button>
                            </div>
                        </div>
                    </form> -->
                    <!-- Promo code -->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->



    <!-- Import Footer -->
    <?php include_once './footer.php'; ?>
    <!-- Import Footer -->



    <!-- SCRIPTS -->
    <!-- JQuery -->
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
    function getRating(el) {
        // alert(el.value);
        if (el.value === 'cod') {
            $('.hides').hide()
            $('.hides1').show()
        } else {
            $('.hides').show()
            $('.hides1').hide()
        }
    }
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</body>

</html>

<?php
require_once "config.php";
if (isset($_POST["submit_btn"])) {
 
// Details of Customer
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$name = $fname . ' ' . $lname;

$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$address2 = $_POST['address2'];
$country = $_POST['country'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$paymentmethod = $_POST['paymentMethod'];

// For COD
if($paymentmethod == 'cod'){
    
    $total_bill = $sub_total+200;

    $sql = "INSERT INTO `order`( `name`, `email`, `phone`, `country`, `state`, `postal`, `address`, `address2`, `payment_method`,  `total_bill`) 
    VALUES ('$name', '$email' ,'$phone' ,'$country' ,'$state' ,'$zip' ,'$address' ,'$address2' ,'$paymentmethod' ,'$total_bill' )";

}else{


    // For CC

    $total_bill = $sub_total;

    $cc_name = $_POST['cc_name'];
    $$cc_number = $_POST['cc_number'];
    $cc_expiration = $_POST['cc_expiration'];
    $cc_vv = $_POST['cc_vv'];


    $sql = "INSERT INTO `order`( `name`, `email`, `phone`, `country`, `state`, `postal`, `address`, `address2`, `payment_method`,  `total_bill`,  `cc_name`, `cc_number`, `cc_expiration`, `cc_vv`) 
    VALUES ('$name', '$email' ,'$phone' ,'$country' ,'$state' ,'$zip' ,'$address' ,'$address2' ,'$paymentmethod' ,'$total_bill' ,'$cc_name' ,'$cc_number' ,'$cc_expiration' ,'$cc_vv' )";

    
}
 
    if ($link->query($sql) === true) {
        $last_id = $link->insert_id;
        echo $last_id;
        // Move Items Form Cart To Order Items Table
        $sql1 = "SELECT * FROM `cart` WHERE `session_id` = '$session_id'";
       

        $result1 = $link->query($sql1);
   
        if ($result1->num_rows > 0) {
            // output data of each row
            while ($row1 = $result1->fetch_assoc()) {


                $product_id = $row1["product_id"];
                $order_id = $last_id;
                $quantity = $row1["quantity"];
                $purchasing_price = $row1["purchasing_price"];
                $session_id = $row1["session_id"];

                // Insert into Order items table
                $sql3 = "INSERT INTO `order_items`( `product_id`, `order_id`, `quantity`, `purchasing_price`, `session_id`) VALUES ('$product_id','$order_id','$quantity','$purchasing_price','$session_id')";

            
                if ($link->query($sql3) === true) {
                    

                    $sql = "DELETE FROM `cart` WHERE `session_id` ='$session_id'";
   
                        $run = mysqli_query($link,$sql);
                        if ($run) {

                        echo `<script>alert("Exam Deleted Sucessfully!")</script>`;
                        // echo("<script>window.location = 'list_banner.php'</script>");
                        exit;

                        } 



                }

            }
        }


        echo `<script>alert("Ordered Successfully")</script>`;
       
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }

}
?>