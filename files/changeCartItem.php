<?php
require_once "config.php";
 if (isset($_POST["id"])) {
    $output = ''; 
     $id = $_POST["id"];
     $qty = $_POST["qty"];
     $session_id = $_POST["session_id"];
  
     $sql = "SELECT * FROM `products` WHERE `id` = '$id'";
                
     $result = $link->query($sql);

     if ($result->num_rows > 0) {
         // output data of each row
         while ($row = $result->fetch_assoc()) {
          
            if($qty <= $row['quantity']){

                $sql = "UPDATE `cart` SET `quantity`='$qty' WHERE `product_id` = '$id' AND `session_id` = '$session_id'";
                    
                if ($link->query($sql) === true) {
                    
                    echo "Quantity Updated";
                } else {
                    echo "Error: " . $sql . "<br>" . $link->error;
                }
            
            }else{


                echo "Quantity must be less than ".$row['quantity'] ;

            }

         }
     }
    


 }
?>