<?php
//    require_once ("mysql_connect.php");
    $title = trim(filter_input(INPUT_POST,'title',FILTER_SANITIZE_STRING));
    $blogId = trim(filter_input(INPUT_POST,'blogId',FILTER_SANITIZE_STRING));
    $query = "DELETE FROM `posts` WHERE `title` = '$title' AND `id` = $blogId";
    $result = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0){
        $output = ['success' => 'true'];
    }
    else{
        $output = ['success' => 'false', 'errors' =>['It did not work']];
    }