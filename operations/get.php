<?php
//    require("mysql_connect.php");

    $query = "SELECT users.username, posts.id, posts.title, post_content.article, posts.added, image.url
              FROM posts
              JOIN users
                ON users.id = posts.users_id
              JOIN post_content
                ON post_content.post_id = posts.id
              LEFT JOIN image
                ON image.posts_id = posts.id
              ORDER BY posts.added DESC";
    $result = mysqli_query($conn, $query);
    $output = ['success' => false];
    if(!empty(mysqli_num_rows($result))){
        $output = ['success' => true];
        while($row = mysqli_fetch_assoc($result)){
            $output['data'][]=$row;
//            printf('id:' . $row['id'] . ' ' . '<br>' . 'users_id: ' . $row['users_id'] . ' ' . '<br>' . 'title: ' . $row['title'] . ' ' . '<br>' . 'article: ' . $row['article'] . ' ' . '<br>' . 'added: ' . $row['added']);
//            echo '<br><br>';
        }
//        $data = json_encode($data);
//        print_r($data);
//        exit();
    }
?>