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
            include('operations/edit.php');
            break;
        case 'delete':
            include('operations/deleteBlog.php');
            break;
        case 'newUser':
            include('operations/newUser.php');
            break;
        default:
            $output = ['success' => 'false', 'errors' => ['invalid operation']];
}

print(json_encode($output));
?>