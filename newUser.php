<?php
    require_once ('mysql_connect.php');
    $givenName = $_POST['firstName'];
    $familyName = $_POST['lastName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $query = "INSERT INTO `users`(`id`, `given_name`, `family_name`, `email`, `username`, `password`) VALUES ('','$givenName','$familyName','$email','$username','$password')";
    $result = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0){
        $output = ['success' => 'true'];
    }
    else{
        $output = ['success' => 'false', 'errors' => ['It did not work']];
    }