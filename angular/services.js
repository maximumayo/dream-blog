/** Service for getting all blog posts for the main/feed page **/
blog.service('getBlogService', function($http, $q){
    this.getData = function(){
        var gbs_self = this;
        var read = 'read';
        var data = $.param({operation: read});
        var defer = $q.defer();
        $http({
            url: 'operations.php',
            method: 'post',
            data: data,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        })
            .then(
                function(response){
                    console.log('successful Resp: ', response);
                    defer.resolve(response);
                },
                function(response){
                    console.log('Error', response);
                    defer.reject('Fail');
                });
            return defer.promise;
    }
});

/** Controller for getting all blog posts for the profile page **/
blog.service('getUserBlogService', function ($http, $q) {
    this.getData = function () {
        var gubs_self = this;
        //var read = 'read';
        var data = $.param({
            operation: 'getAllOneUser',
            username: 'stanw'
        });
        var defer = $q.defer();
        $http({
            url: 'operations.php',
            method: 'post',
            data: data,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        })
            .then(
                function (response) {
                    console.log('successful Resp: ', response);
                    defer.resolve(response);
                    //gbs_self.data = response;
                },
                function (response) {
                    console.log('Error', response);
                    defer.reject('Fail');
                });
        return defer.promise;
    }
});


blog.service('signupService', function ($http, $q) {
    this.sendData = function (firstname, lastname, email, username, password, phone) {
        var ss_self = this;
        var newUser = 'newUser';
        var data = $.param({
            operation: newUser,
            firstName: firstname,
            lastName: lastname,
            email: email,
            username: username,
            password: password,
            phone: phone
        });
        $http({
            url: 'operations.php',
            method: 'post',
            data: data,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        })
            .then(
                function (response) {
                    console.log('successful Resp: ', response);
                },
                function (response) {
                    console.log('Error', response);
                });
    }
});

blog.service('createNewBlogService', function($http){
    this.createBlogPost = function(article, title){
        //The date is not working as of 03/22/16
        var date = Date.now();
        console.log('date at this moment: ', date);
        //var cbs_self = this;
        var create = 'create';
        var data = $.param({
            operation: create,
            added: date,
            article: article,
            title: title,
            user_id: 2
        });
        $http({
           url: 'operations.php',
           method: 'post',
           data: data,
           headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
           }
        })
            .then(function (response){
                console.log('create post success response: ', response);
            },
            function (response){
                console.log('Error', response);
        });
    }
});