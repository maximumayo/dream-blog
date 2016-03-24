var blog = angular.module('blogApp', ['ui.router']);


blog.value('user_id', null);


blog.directive('addpostDirective', function (getUserBlogService, createNewBlogService, $timeout) {
    return {
        restrict: 'E',
        templateUrl: 'templates/profile-content.php',
        controller: 'profilePageController',
        controllerAs: 'ppc',
        scope: {

        },
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

                var title = elem.find('input').val();
                var article = elem.find('textarea').val();
                console.log("Input test title: ", title, " Article: ", article);



                createNewBlogService.createBlogPost(article, title);

                $timeout(function(){
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


                //getUserBlogService.getData().then(
                //    function (r) {
                //        console.log("Test response in directive:", r);
                //        scope.ppc.blogList = r.data.data;
                //    },
                //    function (r) {
                //        console.log('getBlogService Failed');
                //    });
                //$scope.$apply(function () {
                //    $scope.ppc.newPost({blogList: scope.blogList});
                //});
            });
        }
    };
});


//ng-click="ppc.newPost()"