<?php
require_once "config.php";
session_start();

$id = $_GET['id'];

    $sql = "DELETE FROM `products` WHERE `id` ='$id'";
   
    $run = mysqli_query($link,$sql);
    if ($run) {

      echo `<script>alert("Deleted Sucessfully!")</script>`;
        echo("<script>window.location = 'list_products.php'</script>");
        exit;

      } 
?>