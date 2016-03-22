<?php
require("mysql_connect.php");
$article;
$added;
$title;
$user_id;
$query = "insert into `posts` set `added`='2016-03-01 18:44:22', `article`='Today I was wandering around the cherry tree farm, when a brontosarus jumped out and peed on the trees. I walked away from this incident unhurt.', `title`='red killer dragon', `users_id`='1'";
$result = mysqli_query($conn, $query);
$data = ['success' => false];
mysqli_query($conn,$query);
if(mysqli_affected_rows($conn)){
    $data = ['success' => true, 'id' => mysqli_insert_id($conn)];
}
$data = json_encode($data);
print_r($data);
exit();

?>