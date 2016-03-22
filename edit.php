<?php
    require("mysql_connect.php");
//    $test = "hello Korey Lo my name it's lo what i'm am crazy's ha'ha";
//    $testy = mysqli_real_escape_string($conn,$test);
//    $username = $_POST['username'];
    $blogTitle = $_POST['title'];
    $blogContent = $_POST['article'];
    $blogContentE = mysqli_real_escape_string($conn,$blogContent);
    $blogId = $_POST['user_id'];

    $query = "UPDATE `posts` SET `article` = '$blogContentE' WHERE `users_id` = '$blogId' AND `title` = '$blogTitle'";


    if(!empty($_POST['operation'])){
        $operation = $_POST['operation'];
    }
    else{
        $operation = 'none';
    }

    switch ($operation) {
        case 'update':
            break;
        default:
    }






