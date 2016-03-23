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


/** Controller for getting all blog posts for the main/feed page **/
blog.controller('newsFeedController', function(getBlogService){
    var nfc_self = this;
    nfc_self.data = [];
    getBlogService.getData()
        .then(
            function(r){
                console.log("Test response:", r);
                nfc_self.blogList = r.data.data;
        },
            function(r){
                console.log('getBlogService Failed');
            });
})


/** Controller for getting all blog posts for the user profile page **/
.controller('profilePageController', function(getUserBlogService) {
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
});




blog.controller('newsFeedController', function (getBlogService) {
    var nfc_self = this;
    nfc_self.data = [];
    getBlogService.getData().then(function (r) {
        console.log("Test response:", r);
        nfc_self.blogList = r.data.data;
    });
    //console.log('This is the blog List says Trisha',blogList);
});