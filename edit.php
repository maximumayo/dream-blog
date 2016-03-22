<?php
require_once("mysql_connect.php");
//    $test = "hello Korey Lo my name it's lo what i'm am crazy's ha'ha";
//    $testy = mysqli_real_escape_string($conn,$test);
//    $username = $_POST['username'];
if(!empty($_POST['operation'])){
    $operation = $_POST['operation'];
}
else{
    $operation = 'none';
}

switch ($operation) {
    case 'update':
        $blogTitle = $_POST['title'];
        $blogContent = $_POST['article'];
        $blogContentE = mysqli_real_escape_string($conn,$blogContent);
        $blogId = $_POST['users_id'];
        $query = "UPDATE `posts` SET `article` = '$blogContentE' WHERE `users_id` = '$blogId' AND `title` = '$blogTitle'";
        $result = mysqli_query($conn,$query);
        if(mysqli_affected_rows($conn) > 0){
            $output = ['success' => 'true'];
        }
        else{
            $output = ['success' => 'false'];
        }
        break;
    default:
        $output = ['success' => 'false', 'errors' => ["invalid operation"]];
}

print(json_encode($output));

?>







