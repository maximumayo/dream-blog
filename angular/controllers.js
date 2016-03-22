blog.controller("signupController", function ($scope, signupService) {
    $scope.accountInfo = {};
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


blog.controller('newsFeedController', function (getBlogService) {
    var nfc_self = this;
    nfc_self.data = [];
    getBlogService.getData().then(function (r) {
        console.log("Test response:", r);
        nfc_self.blogList = r.data.data;
    });
    //console.log('This is the blog List says Trisha',blogList);

});