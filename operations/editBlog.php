<?php
//require_once("mysql_connect.php");

    $userId = trim(filter_input(INPUT_POST,'users_id',FILTER_SANITIZE_STRING));
    $blogContent = trim(filter_input(INPUT_POST,'article',FILTER_SANITIZE_STRING));
    $blogContentE = mysqli_real_escape_string($conn,$blogContent);
    $blogId = trim(filter_input(INPUT_POST,'blog_id',FILTER_SANITIZE_NUMBER_INT));

    $query = "UPDATE post_content
                JOIN posts
                  ON  post_content.post_id = $blogId
                JOIN users
                  ON posts.users_id = $userId
                SET article = '$blogContentE'";
    $result = mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn) > 0){
        $output = ['success' => 'true'];
    }
    else{
        $output = ['success' => 'false', 'errors' => 'invalid'];
    }





?>







