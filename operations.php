<?php
require_once('mysql_connect.php');

if (!empty($_POST['operation'])) {
    $operation = $_POST['operation'];
} else {
    $operation = 'none';
}

// There is going to be a authoriztion check here that determines if the user is allowed to perform an operation

<<<<<<< HEAD
    switch ($operation) {
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
        default:
            $output = ['success' => 'false', 'errors' => ['invalid operation']];
=======
switch ($operation) {
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
    default:
        $output = ['success' => 'false', 'errors' => ['invalid operation']];
>>>>>>> 910bf12ea2a94c833a4aa3257860f2b33b11f064
}

print(json_encode($output));
?>