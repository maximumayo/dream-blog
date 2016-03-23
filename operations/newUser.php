<?php
    require_once('mysql_connect.php');
    $givenName = trim(filter_input(INPUT_POST,'firstName',FILTER_SANITIZE_STRING));
    $familyName = trim(filter_input(INPUT_POST,'lastName',FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL));
    $username = trim(filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING));
    $password = sha1(trim(filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING)));
    $phone = trim(filter_input(INPUT_POST,'phone',FILTER_SANITIZE_NUMBER_INT));
    $query = "INSERT INTO `users`(`id`, `given_name`, `family_name`, `email`, `username`, `password`, `phone`) VALUES ('','$givenName','$familyName','$email','$username','$password','$phone')";
    $result = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0){
        $output = ['success' => 'true'];
    }
    else{
        $output = ['success' => 'false', 'errors' => ['It did not work']];
    }