<?php 
require_once "config.php";
session_start();
if (isset($_POST["id"])) {
    $id = $_POST['id'];
    $session_id = $_POST['session_id'];

    $sql = "DELETE FROM `cart` WHERE `product_id` = '$id' AND `session_id` = '$session_id'";
    // echo $sql;
    $run = mysqli_query($link, $sql);
    if ($run) {
  


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
                    echo json_encode(array("message" => "Remove Product Successfully", "cart" =>  $cartItems));

    }
}

