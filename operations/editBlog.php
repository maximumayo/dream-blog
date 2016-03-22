<?php
//require_once("mysql_connect.php");

    $blogTitle = $_POST['title'];
    $blogContent = $_POST['article'];
    $blogContentE = mysqli_real_escape_string($conn,$blogContent);
    $blogId = $_POST['users_id'];
    $query = "UPDATE `posts` SET `article` = '$blogContentE' WHERE `users_id` = '$blogId' AND `title` = '$blogTitle'";
    $result = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0){
        $output = ['success' => 'true'];
    }
    else{
        $output = ['success' => 'false', 'errors' => ['It did not work']];
    }





?>







