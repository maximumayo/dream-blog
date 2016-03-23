<?php
$added = Date("Y-m-d H:i:s");
//echo $added;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fluffy Chainsaw Blog</title>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!--ANGULAR-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js"></script>
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="style.css">
    <script src="stan.js"></script>


</head>
<body>
<input id='title' placeholder="title goes here" /><br><br>
<textarea id='article' rows='20' cols='50' placeholder="story goes here"></textarea><br><br>
<button onclick="postNewBlogArticle('<?=$added?>', $('#article').val(), $('#title').val())">Submit</button>
<br><br><br>
<button onclick="getBlogListFromServer()">Get from Server</button>
<br><br><br>
<input id="username" placeholder="username goes here"/> <br><br>
<input id="password" placeholder="password goes here"/> <br><br>
<button onclick="getAllArticlesOneUser($('#username').val())">Get all one user</button>
<button onclick="deleteUser($('#username').val(), $('#password').val())">Delete User</button>
<br><br><br>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>