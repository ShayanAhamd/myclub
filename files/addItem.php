<?php
session_start();
require_once "config.php";
 if (isset($_POST["id"])) {
    $output = ''; 
    $id = $_POST['id'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $session_id = $_POST['session_id'];

//   Check Product IS it present in cart or not
     $sql = "SELECT COUNT(*) AS number FROM `cart` WHERE `product_id` = '$id' AND `session_id` = '$session_id'";
                
     $result = $link->query($sql);

     if ($result->num_rows > 0) {
         // output data of each row
         while ($row = $result->fetch_assoc()) {
        //   Condition to check item in cart
            if($row['number'] == 0){

                $sql = "INSERT INTO `cart`( `product_id`,`quantity`, `purchasing_price`, `session_id`) VALUES ('$id' , '$qty' ,'$price','$session_id')";
                    
                if ($link->query($sql) === true) {

                // Calculate number of items present in cart
                    $sql1 = "SELECT COUNT(*) AS number1 FROM `cart` WHERE `session_id` = '$session_id'";
                
                    $result1 = $link->query($sql1);
               
                    if ($result1->num_rows > 0) {
                        // output data of each row
                        while ($row1 = $result1->fetch_assoc()) {

                            $cartItems = $row1['number1'];
                            $_SESSION["$cartItems"] = $cartItems;

                        }
                    }
                //   Return  Message and cart valure
                    echo json_encode(array("message" => "Add Product to cart successfully", "cart" =>  $cartItems));
                } else {
                    echo "Error: " . $sql . "<br>" . $link->error;
                }
            
            }else{
               

                    // Calculate number of items present in cart
                        $sql1 = "SELECT COUNT(*) AS number1 FROM `cart` WHERE `session_id` = '$session_id'";
                    
                        $result1 = $link->query($sql1);
                   
                        if ($result1->num_rows > 0) {
                            // output data of each row
                            while ($row1 = $result1->fetch_assoc()) {
    
                                $cartItems = $row1['number1'];
                                $_SESSION["cartItems"] = $cartItems;
    
                            }
                        }
                        echo json_encode(array("message" => "Already Present in the Cart", "cart" =>  $cartItems));
            }

         }
       
     }
    


 }
?>