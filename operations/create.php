<?php
//require("mysql_connect.php");
$article = trim(filter_input(INPUT_POST,'article',FILTER_SANITIZE_STRING));
//$article = mysqli_real_escape_string($_POST['article']);
$added = Date("Y-m-d H:i:s");
$title = trim(filter_input(INPUT_POST,'title',FILTER_SANITIZE_STRING));
$user_id = trim(filter_input(INPUT_POST,'users_id',FILTER_SANITIZE_NUMBER_INT));
$query = "insert into `posts` set `added`='$added', `title`='$title', `users_id`='$user_id'";
$output = ['success' => false];
$result = mysqli_query($conn,$query);
if(mysqli_affected_rows($conn)>0){
    $output = ['success' => true, 'id' => mysqli_insert_id($conn)];
}
$last_insert= mysqli_insert_id($conn);
$post_content_query = "insert into `post_content` set post_content.article = '$article', post_content.post_id = '$last_insert'" ;
$result2 = mysqli_query($conn,$post_content_query);
//$data = json_encode($data);
//print_r($data);
//exit();



?>