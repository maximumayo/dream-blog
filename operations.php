<?php
require_once('mysql_connect.php');

if(!empty($_POST['operation'])){
    $operation = $_POST['operation'];
}
else{
    $operation = 'none';
}


    switch ($operation) {
        case 'update':
            include('edit.php');
            break;
        case 'delete':
            include('deleteBlog.php');
            break;
        case 'newUser':
            include('newUser.php');
            break;
        default:
            $output = ['success' => 'false', 'errors' => ['invalid operation']];
}

print(json_encode($output));
?>