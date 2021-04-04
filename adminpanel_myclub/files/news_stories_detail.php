<?php
require_once "config.php";
 if (isset($_POST["id"])) {
    $output = ''; 
     $id =$_POST["id"];



     $sql = "SELECT * FROM `news_stories` WHERE `id` = '$id'";                                
     $result = $link->query($sql);
     if ($result->num_rows > 0) {
         while ($row = mysqli_fetch_array($result)) {
  
            $output .='<div >"'.$row["details"].'"</div>';
                

          }
     

     }else{

        echo "NO Result";

     }
echo  $output;


 }
?>
