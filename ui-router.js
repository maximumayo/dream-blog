/**
 * Created by Timmy on 3/21/2016.
 */
var blog = angular.module('blogApp', ['ui.router']);

blog.config(function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/home');

    $stateProvider

        .state('home', {
            url: '/home',
            templateUrl: 'landing-page.php'
        })
});