blog.controller("signupController", function ($scope, signupService) {
    $scope.accountInfo = {
        //userName: "shimoshixp", firstName: "Timmy", lastName: "Nguyen", password: "aergAERG1234", passwordConfirm: "aergAERG1234", email: "shimoshixp@gmail.com", phoneNumber: "123-123-1234"
    };
    var sc_self = this;
    $scope.createAccount = function () {
        signupService.sendData(
            $scope.accountInfo.firstName,
            $scope.accountInfo.lastName,
            $scope.accountInfo.email,
            $scope.accountInfo.userName,
            $scope.accountInfo.password,
            $scope.accountInfo.phoneNumber
        );
    };
});

/** Controller for getting all blog posts for the user profile page **/
blog.controller('profilePageController', function(getUserBlogService, createNewBlogService, deleteBlogPostService, editBlogPostService) {
    var ppc_self = this;
    ppc_self.data = [];

    getUserBlogService.getData()
        .then(
            function (r) {
                console.log("Test response:", r);
                ppc_self.blogList = r.data.data;
            },
            function (r) {
                console.log('getBlogService Failed');
            });

    ppc_self.blogPost = {};
    ppc_self.newPost = function(){
        createNewBlogService.createBlogPost(
            ppc_self.blogPost.article,
            ppc_self.blogPost.title
        );
        getUserBlogService.getData()
            .then(
                function (r) {
                    console.log("Test response:", r);
                    ppc_self.blogList = r.data.data;
                    console.log('blogList:',ppc_self.blogList);
                },
                function (r) {
                    console.log('getBlogService Failed');
                });
    };

    ppc_self.deleteBlogPost = {};
    ppc_self.deletePost = function(id){
       deleteBlogPostService.deletePost(
           id
       );
    };

    ppc_self.editBlogPost = {};
    ppc_self.editPost = function(id) {
        editBlogPostService.editPost(
            id,
            //ppc_self.editBlogPost.user_id,
            ppc_self.editBlogPost.article
        );
    };
});


blog.controller('newsFeedController', function (getBlogService) {
    var nfc_self = this;
    nfc_self.data = [];
    getBlogService.getData().then(function (r) {
        //console.log("Test response:", r);
        nfc_self.blogList = r.data.data;
    });
    //console.log('This is the blog List says Trisha',blogList);
});

blog.controller("logInController", function ($scope, logInService) {
    var lc_self = this;
    $scope.loginAttempt = function () {
        logInService.logData(
            $scope.logInfo.logName,
            $scope.logInfo.logPassword
        );
    };

    $scope.invalidLogin = logInService.invalidLogin;
});

blog.controller("logOutController", function (logoutService, $scope) {
    var loc_self = this;
    $scope.logoutAttempt = function () {
        logoutService.logoutData();
    };
});