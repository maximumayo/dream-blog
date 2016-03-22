blog.controller("signupController", function ($scope) {
    $scope.accountInfo = {};
    var self = this;

    $scope.createAccount = function () {
        console.log('account info: ', $scope.accountInfo);
        console.log('HEY HEY');
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