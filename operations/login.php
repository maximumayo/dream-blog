<?php
require('mysql_connect.php');
//$username = trim(filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING));
//$password = trim(filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING));//sha1(trim(filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING)));
$query = "SELECT * FROM `users` WHERE username = 'klo' and password = 'kokokoko'";
$result = mysqli_query($conn, $query);
$output = ['success'=>false];
if(mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
            $output['data'][] = $row;
//if(mysqli_affected_rows($conn)>0){
//    $output = ['success' => true];
        //$query2=
        //$_SESSION['users_id'] =
    }
    $output = ['success' => true, 'user_id' => $output['data'][0]['id']];
    $_SESSION['user_id']= $output['user_id'];
    //print($_SESSION['user_id']);
    //$output = $output['data'][0]['id'];
    //print_r($output);

}
?>