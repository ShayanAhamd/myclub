<?php
require_once "config.php";
session_start();

$id = $_GET['id'];

    $sql = "DELETE FROM `news_stories` WHERE `id` ='$id'";
   
    $run = mysqli_query($link,$sql);
    if ($run) {

      echo `<script>alert(" Deleted Sucessfully!")</script>`;
        echo("<script>window.location = 'list_news_and_stories.php'</script>");
        exit;

      } 
?>