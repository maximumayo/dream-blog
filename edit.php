<?php
    require("mysql_connect.php");
    $test = "hello Korey Lo my name it's lo what i'm am crazy's ha'ha";
    $testy = mysqli_real_escape_string($conn,$test);
//    $_POST['username'];
//    $_POST['title'];
    $query = "UPDATE `posts` SET `article` = '$testy' WHERE `users_id` = 1 AND `title` = 'my day'";
    $result = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0){
        echo "It Works";
    }
    else{
        echo "It didn't work";
    }
