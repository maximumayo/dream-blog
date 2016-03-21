<?php
    require("mysql_connect.php");
    $query = "SELECT * FROM `posts`";
    $result = mysqli_query($conn, $query);
    if(!empty(mysqli_num_rows($result))){
        while($row = mysqli_fetch_assoc($result)){
            printf('id:' . $row['id'] . ' ' . '<br>' . 'users_id: ' . $row['users_id'] . ' ' . '<br>' . 'title: ' . $row['title'] . ' ' . '<br>' . 'article: ' . $row['article'] . ' ' . '<br>' . 'added: ' . $row['added']);
            echo '<br><br>';
        }
    }
?>