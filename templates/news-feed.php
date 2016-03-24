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
                <ul class="nav navbar-nav" ng-controller="logOutController">
                    <li class="active"><a ui-sref="newsfeed" class='links'>Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li><a ui-sref="profile" class='links'>My Profile</a></li>
                    <li><a ui-sref="landing" ng-click="logoutAttempt()" class='links navbar-left'>Log Out</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>

<!--TODO: Make sure this is an active controller-->
<div class="blogPosts" ng-controller="newsFeedController as nfc">
    <div class='content container-fluid'>
        <div class='row' ng-repeat='post in nfc.blogList'>
<!--            <img ng-src="{{post.url}}">-->
            <div class='col-xs-8 blogPart'><img id='profPic' ng-src="{{post.url}}"><h2>{{post.title}}</h2><span>{{' Author: ' + post.username}}</span></div>
            <div class='col-xs-4 blogPart'>{{post.added | date:'MM/dd/yyyy @ h:mma'}}</div>
            <div class='col-xs-12 blogPart'>
                <hr>
                {{post.article}}
            </div>
        </div>
    </div>
</div>

