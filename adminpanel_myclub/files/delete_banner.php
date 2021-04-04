<?php
require_once "config.php";
session_start();

$id = $_GET['id'];

    $sql = "DELETE FROM `baner` WHERE `id` ='$id'";
   
    $run = mysqli_query($link,$sql);
    if ($run) {

      echo `<script>alert("Exam Deleted Sucessfully!")</script>`;
        echo("<script>window.location = 'list_banner.php'</script>");
        exit;

      } 
?>