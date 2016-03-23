<?php
//require("mysql_connect.php");

//$username = $_POST['username'];
//$password = sha1($_POST['password']);
//$output = ['success'=> false];

$username = trim(filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING));
$password = sha1(trim(filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING)));
$data = ['success'=> false];
$query = "DELETE FROM  `users` WHERE  `username` =  '$username'";
$result = mysqli_query($conn, $query);
if(mysqli_affected_rows($conn) > 0) {
    $output = ['success' => true];
//    $data = json_encode($data);
//    print_r($data);
//    exit();
}
?>