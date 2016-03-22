<?php
//require_once("mysql_connect.php");

    $blogTitle = trim(filter_input(INPUT_POST,'title',FILTER_SANITIZE_STRING));
    $blogContent = trim(filter_input(INPUT_POST,'article',FILTER_SANITIZE_STRING));
    $blogContentE = mysqli_real_escape_string($conn,$blogContent);
    $blogId = trim(filter_input(INPUT_POST,'users_id',FILTER_SANITIZE_NUMBER_INT));
    $query = "UPDATE `posts` SET `article` = '$blogContentE' WHERE `users_id` = '$blogId' AND `title` = '$blogTitle'";
    $result = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0){
        $output = ['success' => 'true'];
    }
    else{
        $output = ['success' => 'false', 'errors' => ['It did not work']];
    }





?>







