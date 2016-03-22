<?php
require("mysql_connect.php");
$article = $_POST['article'];
$added = $_POST['added'];
$title = $_POST['title'];
$user_id = 1;
$query = "insert into `posts` set `added`='$added', `article`='$article', `title`='$title', `users_id`='$user_id'";
$data = ['success' => false];
$result = mysqli_query($conn,$query);
if(mysqli_affected_rows($conn)>0){
    $data = ['success' => true, 'id' => mysqli_insert_id($conn)];
}
$data = json_encode($data);
print_r($data);
exit();

?>