var blog = angular.module('blogApp', ['ui.router']);

blog.value('user_id', null);

blog.directive('addpostDirective', function (getUserBlogService, createNewBlogService, $timeout) {
    return {
        restrict: 'E',
        templateUrl: 'templates/profile-content.php',
        controller: 'profilePageController',
        controllerAs: 'ppc',
        scope: {},
        link: function (scope, elem, attrs) {
            scope.blogList = {};

            getUserBlogService.getData()
                .then(
                    function (r) {
                        console.log("Test response in directive:", r);

                        scope.blogList = r.data.data;

                    },
                    function (r) {
                        console.log('getBlogService Failed');
                    });

            elem.find('#save').bind('click', function () {

                console.log("I was clicked!", scope.ppc);

                var title = elem.find('input');
                var article = elem.find('textarea');

                console.log("Input test title: ", title.val(), " Article: ", article.val());

                createNewBlogService.createBlogPost(article.val(), title.val());

                $timeout(function () {
                    getUserBlogService.getData()
                        .then(
                            function (r) {
                                console.log("Test response in directive:", r);

                                scope.blogList = r.data.data;

                            },
                            function (r) {
                                console.log('getBlogService Failed');
                            });
                }, 600);
                article.val("");
                title.val("");
            });
        }
    };
});