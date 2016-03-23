<?php
//    require_once ("mysql_connect.php");
    $usersId = trim(filter_input(INPUT_POST,'users_id',FILTER_SANITIZE_STRING));
    $blog_id = trim(filter_input(INPUT_POST,'blog_id',FILTER_SANITIZE_STRING));
    $query = "DELETE post_content, posts FROM post_content
              JOIN posts
                ON posts.id = post_content.post_id
              JOIN users
                ON users.id = posts.users_id
              WHERE posts.id = $blog_id AND users.id = $usersId";
    $result = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0){
        $output = ['success' => 'true'];
    }
    else{
        $output = ['success' => 'false', 'errors' =>['It did not work']];
    }