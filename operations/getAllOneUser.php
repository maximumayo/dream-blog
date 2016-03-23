<?php
//require("mysql_connect.php");
$userId = trim(filter_input(INPUT_POST,'userId',FILTER_SANITIZE_STRING));
$query = "SELECT users.username, posts.title, post_content.article, posts.added, posts.id
            FROM posts
            JOIN users
                ON users.id = posts.users_id
            JOIN post_content
                ON post_content.post_id = posts.id
            WHERE users.id = $userId";
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
else{
    $output = ['success' => false , 'errors' => ['No posts for that user']];

}

?>