

blog.config(function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/landing');

    $stateProvider

        .state('landing', {
            url: '/landing',
            templateUrl: 'templates/landing-page.php'
        })

        .state('registration', {
            url: '/registration',
            templateUrl: 'templates/registration-page.php'
        })

        .state('newsfeed', {
            url: '/newsfeed',
            templateUrl: 'templates/news-feed.php',
            controller: 'newsFeedController'
        })

        .state('profile', {
            url: '/profile',
            templateUrl: 'templates/profile-page.php'
        })

});