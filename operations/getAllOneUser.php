<?php
//require("mysql_connect.php");
$username = trim(filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING));
$query = "select users.username, posts.added, posts.article, posts.title from posts join users on posts.users_id = users.id where users.username = '$username' order by added desc";
$result = mysqli_query($conn, $query);
$output = ['success' => false];
if(!empty(mysqli_num_rows($result))){
    $output = ['success' => true];
    while($row = mysqli_fetch_assoc($result)){
        $output['data'][]=$row;
//            printf('id:' . $row['id'] . ' ' . '<br>' . 'users_id: ' . $row['users_id'] . ' ' . '<br>' . 'title: ' . $row['title'] . ' ' . '<br>' . 'article: ' . $row['article'] . ' ' . '<br>' . 'added: ' . $row['added']);
//            echo '<br><br>';
    }
//    $output = json_encode($data);
//    print_r($data);
//    exit();
}

?>