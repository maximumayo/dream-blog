<!--nav-bar -->
<div class='container-fluid'>
    <nav class="navbar" id='navbar'>
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                    <li class="active"><a ui-sref="newsfeed" class='links'>Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li><a ui-sref="profile" class='links'>My Profile</a></li>
                    <li><a ui-sref="landing" class='links navbar-left'>Log Out</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>


<div id="profile-page" class="blogPosts container" ng-controller="profilePageController as ppc">


    <div class="row">
        <!--left panel-->
        <div class="col-md-3 left-panel">
            <div class="profile-image">
                <!--TODO: Image should come from server in a later version-->
                <img class="img-responsive img-circle" src="https://media.licdn.com/media/p/7/005/08b/373/15cb74b.jpg">
            </div>

            <div class="new-post">
                <button type="button" class="btn btn-primary btn-lg align-center" data-toggle="modal"
                        data-target="#createBlogModal">New
                    Post
                </button>
            </div>
        </div>

        <!--right-panel-->
        <div class="col-md-9 pull-right blogPosts" ng-controller="profilePageController as ppc">
            <div class="row">
                <div class="col-md-6" ng-repeat='post in ppc.blogList'>
                    <div class="row">
                        <div class="col-xs-11 blogPart">
                            <div class='row'>
                                <div class="col-xs-12">
                                    <h3>{{post.title}}</h3>
                                    <span>{{' Author: ' + post.username+ " - "}}</span>
                                    <span>{{post.added}}</span>
                                    <p>{{post.article}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button  class="btn btn-sm btn-danger pull-right" ng-click="ppc.deletePost(post.id)
                                    ">Delete</button>
                                    <button class="btn btn-sm btn-warning pull-right" ng-click="ppc.editPost()
                                    ">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--</div>-->


    <!-- Modal Creation -->
    <div class="modal fade" id="createBlogModal" tabindex="-1" role="dialog"
         aria-labelledby="createBlogModalLabel"
         data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="createBlogModalLabel">New Blog Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- <input placeholder='username'> -->
                        <!-- <input placeholder='date'> -->
                        <input placeholder='title' ng-model="ppc.blogPost.title"> <br>
                    <textarea placeholder='Blog Post Content' rows='10' cols='50'
                              ng-model="ppc.blogPost.article"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" ng-click="ppc.newPost()">Save
                        changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>







