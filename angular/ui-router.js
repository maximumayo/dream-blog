blog.config(function ($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/landing');

    $stateProvider

        .state('landing', {
            url: '/landing',
            templateUrl: 'templates/landing-page.php',
            controller: 'logInController'
        })

        .state('registration', {
            url: '/registration',
            templateUrl: 'templates/registration-page.php',
            controller: 'signupController'
        })

        .state('newsfeed', {
            url: '/newsfeed',
            templateUrl: 'templates/news-feed.php',
            controller: 'newsFeedController'
        })

        .state('profile', {
            url: '/profile',
            templateUrl: 'templates/profile-page.php',
            controller: 'profilePageController'
        })

});