blog.controller("signupController", function ($scope){
    $scope.accountInfo = {};
    var self = this;

    $scope.createAccount = function (){
        console.log('account info: ', $scope.accountInfo);
        console.log('HEY HEY');
    };


});