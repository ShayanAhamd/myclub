<?php
require_once "config.php";
session_start();

$id = $_GET['id'];
$show = $_GET['show'];


if($show == 0){
    $sql = "UPDATE `products` SET `first_page`= 1 WHERE `id` = '$id'";
}else{
    $sql = "UPDATE `products` SET `first_page`= 0 WHERE `id` = '$id'";
}
    
   
    $run = mysqli_query($link,$sql);
    if ($run) {

      echo `<script>alert("Deleted Sucessfully!")</script>`;
        echo("<script>window.location = 'list_products.php'</script>");
        exit;

      } 
?>