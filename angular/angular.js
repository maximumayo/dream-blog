var blog = angular.module('blogApp', ['ui.router']);


blog.value('user_id', null);
//
//blog.directive('updateDirective', function(){
//    return {
//        restrict: 'AE',
//        templateUrl: 'templates/profile-page.php',
//        scope: {
//            profilePosts: '=',
//            updateData: '&'
//        },
//        link: function(scope, elem, attr){
//            elem.find('#newPostbtn').bind('click', function(){
//               scope.$apply(function(){
//                   scope.updateData();
//               });
//            });
//        }
//    }
//});
