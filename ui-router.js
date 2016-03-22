/**
 * Created by Timmy on 3/21/2016.
 */
var blog = angular.module('blogApp', ['ui.router']);

blog.config(function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/landing');

    $stateProvider

        .state('landing', {
            url: '/landing',
            templateUrl: 'landing-page.php'
        })

        .state('registration', {
            url: '/registration',
            templateUrl: 'registration-page.php'
        })

        .state('newsfeed', {
            url: '/newsfeed',
            templateUrl: 'news-feed.php'
        })

        .state('profile', {
            url: '/profile',
            templateUrl: 'profile-page.php'
        })

});