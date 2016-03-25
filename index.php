<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fluffy Chainsaw Blog</title>
    <!--jquery-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!--bootstrap jquery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    <!--bootstrap-->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!--angular-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
    <!--ui-router-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js"></script>
    <!--google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Short+Stack' rel='stylesheet' type='text/css'>
    <!--css-->
    <link rel="stylesheet" href="style.css">

    <script src="database.js"></script>



</head>

<body ng-app="blogApp" id="bg">

<div ui-view></div>

<!--angular script files-->
<script src="angular/angular.js" type="text/javascript"></script>
<script src="angular/ui-router.js" type="text/javascript"></script>
<script src="angular/controllers.js" type="text/javascript"></script>
<script src="angular/services.js" type="text/javascript"></script>
</body>
</html>
