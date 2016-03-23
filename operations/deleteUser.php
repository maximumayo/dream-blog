<?php
//require("mysql_connect.php");

//$username = $_POST['username'];
//$password = sha1($_POST['password']);
//$output = ['success'=> false];

$user_id = trim(filter_input(INPUT_POST,'user_id',FILTER_SANITIZE_NUMBER_INT));
//$password = sha1(trim(filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING)));
$data = ['success'=> false];
$query = "DELETE FROM  `users` WHERE  `id` =  '$user_id'";
$result = mysqli_query($conn, $query);
if(mysqli_affected_rows($conn) > 0) {
    $output = ['success' => true];
    $query2 = "DELETE FROM posts WHERE users_id =$user_id";
    $posts_remove_result = mysqli_query($conn, $query2);
//    $data = json_encode($data);
//    print_r($data);
//    exit();
}
?>