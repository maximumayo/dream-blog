<?php
//    require_once ("mysql_connect.php");
    $title = $_POST['title'];
    $blogId = $_POST['blogId'];
    $query = "DELETE FROM `posts` WHERE `title` = '$title' AND `id` = $blogId";
    $result = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0){
        $output = ['success' => 'true'];
    }
    else{
        $output = ['success' => 'false', 'errors' =>['It did not work']];
    }