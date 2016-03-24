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
        <div class="col-md-9 pull-right blogPosts">
            <div class="row">
                <div class="col-md-6" ng-repeat='post in blogList'>
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
                                    <button class="btn btn-sm btn-danger pull-right" ng-click="ppc.deletePost(post.id)
                                    ">Delete
                                    </button>
                                    <button class="btn btn-sm btn-warning pull-right" ng-click="ppc.editPost(post.id)
                                    ">Edit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <input placeholder='title'> <br>
                        <textarea placeholder='Blog Post Content' rows='10' cols='50'></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save" data-dismiss="modal">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</div>