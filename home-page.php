<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta name="viewport" content="width=device-width">-->
<!--    <title>JS Bin</title>-->
<!--</head>-->
<!--<body>-->
<!--<html ng-app="blogFeed">-->
<!---->
<!--<head>-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
<!---->
<!--    <!-- Latest compiled and minified CSS -->-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />-->
<!--    <link rel="stylesheet" href="style.css" />-->
<!--    <!-- Latest compiled and minified JavaScript -->-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
<!---->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>-->
<!--<!--    <script src="script.js"></script>-->-->
<!--</head>-->

<!--TODO:Change this id because it shouldn't go here and it will eventually have an extra body tag-->
<body id="body">
<div class='bgimg container-fluid'>
    <nav class="navbar" id='navbar'>
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">THIS.BLOG</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#" class='links'>Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#" class='links'>Profile</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<div class="blogPosts" ng-controller="feedController as fc">
    <!--<blog-feed-directive></blog-feed-directive>-->
    <!-- <div class='jumbotron'> -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#createBlogModal">New Post</button>
    <!-- </div> -->


    <h1>Blog Feed</h1>
    <div class='content container-fluid'>
        <div class='row' ng-repeat='post in fc.blogArray'>
            <div class='col-xs-8 blogPart'><h2>{{post.title}}</h2><span>{{' Author: ' + post.username}}</span></div>
            <!-- <div class='col-xs-4 blogPart'>{{'By: ' + post.username}}</div> -->
            <div class='col-xs-4 blogPart'>{{post.date}}</div>
            <div class='col-xs-12 blogPart'><hr>{{post.content}}</div>
        </div>
    </div>


<!-- Modal Creation -->
    <div class="modal fade" id="createBlogModal" tabindex="-1" role="dialog" aria-labelledby="createBlogModalLabel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="createBlogModalLabel">New Blog Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- <input placeholder='username'> -->
                        <!-- <input placeholder='date'> -->
                        <input placeholder='title'> <br>
                        <textarea placeholder='Blog Post Content' rows='10' cols='50'></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!--</html>-->