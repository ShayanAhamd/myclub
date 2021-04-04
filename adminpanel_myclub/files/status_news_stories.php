<?php
require_once "config.php";
session_start();

$id = $_GET['id'];
$show = $_GET['show'];


if($show == 0){
    $sql = "UPDATE `news_stories` SET `status`= 1 WHERE `id` = '$id'";
}else{
    $sql = "UPDATE `news_stories` SET `status`= 0 WHERE `id` = '$id'";
}
    
   
    $run = mysqli_query($link,$sql);
    if ($run) {

        echo("<script>window.location = 'list_news_and_stories.php'</script>");
        exit;

      } 
?>