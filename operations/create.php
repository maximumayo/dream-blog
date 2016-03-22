<?php
//require("mysql_connect.php");
$article = trim(filter_input(INPUT_POST,'article',FILTER_SANITIZE_STRING));
$added = trim(filter_input(INPUT_POST,'added',FILTER_SANITIZE_STRING));
$title = trim(filter_input(INPUT_POST,'title',FILTER_SANITIZE_STRING));
$user_id = 1;
$query = "insert into `posts` set `added`='$added', `article`='$article', `title`='$title', `users_id`='$user_id'";
$output = ['success' => false];
$result = mysqli_query($conn,$query);
if(mysqli_affected_rows($conn)>0){
    $output = ['success' => true, 'id' => mysqli_insert_id($conn)];
}
//$data = json_encode($data);
//print_r($data);
//exit();
?>