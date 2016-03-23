<?php
require_once('mysql_connect.php');



// There is going to be a authoriztion check here that determines if the user is allowed to perform an operation


//if(!empty($_SESSION['users_id']) && $_SESSION['users_id'] === $_POST['users_id']) {

    if (!empty($_POST['operation'])) {
        $operation = $_POST['operation'];
    } else {
        $operation = 'none';
    }

    switch ($operation) {
        case 'login':
            include('operations/login.php');
            break;
        case 'editBlog': // Update Blog
            include('operations/editBlog.php');
            break;
        case 'deleteBlog': // Delete Blog
            include('operations/deleteBlog.php');
            break;
        case 'newUser': // Creating a new user: This will be moved
            include('operations/newUser.php');
            break;
        case 'read': // Get all Blogs
            include('operations/get.php');
            break;
        case 'getAllOneUser': // Get all Blogs for one user
            include('operations/getAllOneUser.php');
            break;
        case 'create': // This creates a new blog
            include('operations/create.php');
            break;
        case 'deleteUser':
            include('operations/deleteUser.php');
            break;
        case 'signout':
            include('operations/signout.php');
            break;
        default:
            $output = ['success' => false, 'errors' => ['invalid operation']];
    }
//}
//else{
//    $output = ['success' => false, 'errors' => ['session has expired please log in again to continue']];
//}

print(json_encode($output));
?>