<?php
    require("mysql_connect.php");
    $query = "SELECT users.username, posts.title, posts.article, posts.added FROM posts JOIN users ON users.id = posts.users_id order by posts.added desc";
    $result = mysqli_query($conn, $query);
    $data = ['success' => false];
    if(!empty(mysqli_num_rows($result))){
        $data = ['success' => true];
        while($row = mysqli_fetch_assoc($result)){
            $data['data'][]=$row;
//            printf('id:' . $row['id'] . ' ' . '<br>' . 'users_id: ' . $row['users_id'] . ' ' . '<br>' . 'title: ' . $row['title'] . ' ' . '<br>' . 'article: ' . $row['article'] . ' ' . '<br>' . 'added: ' . $row['added']);
//            echo '<br><br>';
        }
        $data = json_encode($data);
        print_r($data);
        exit();
    }
?>