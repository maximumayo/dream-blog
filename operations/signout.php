<?php
//session_start();
unset($_SESSION['users_id']);
$_SESSION['users_id'] = null;
session_destroy();
if(empty($_SESSION['users_id'])){
    $output = ['success' => true];
    print_r($output);
}
else{
    $output = ['success' => false];
    print_r($output);
}
?>