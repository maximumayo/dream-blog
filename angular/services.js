/** Service for getting all blog posts for the main/feed page **/
blog.service('getBlogService', function ($http, $q) {
    this.getData = function () {
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
                function (response) {
                    console.log('successful Resp: ', response);
                    defer.resolve(response);
                },
                function (response) {
                    console.log('Error', response);
                    defer.reject('Fail');
                });
        return defer.promise;
    }
});

/** service for getting all blog posts for the profile page **/
blog.service('getUserBlogService', function ($http, $q) {
    this.getData = function () {
        var gubs_self = this;
        //var read = 'read';
        var data = $.param({
            operation: 'getAllOneUser',
            //we need to get the user id somehow
            users_id: user_id
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

/** service for a new user sign up **/
blog.service('signupService', function ($http, $q, $state) {
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
                    console.log('Successfully sent form to server: ', response);
                    $state.go('landing');
                },
                function (response) {
                    console.log('Error', response);
                });
    }
});

/**
 * Create a new blog post and send it to the database
 * */
blog.service('createNewBlogService', function ($http) {
    this.createBlogPost = function (article, title) {
        //var cbs_self = this;
        var create = 'create';
        var data = $.param({
            operation: create,
            article: article,
            title: title,
            /** TO DO: the user_id will have to change according to the user posting**/
            users_id: user_id
        });
        $http({
            url: 'operations.php',
            method: 'post',
            data: data,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        })
            .then(function (response) {
                    console.log('create post success response: ', response);
                },
                function (response) {
                    console.log('Error', response);
                });
    }
});


//log in service
blog.service('logInService', function ($http, $q, $state) {
    var lis_self = this;
    invalidLogin = false;

    this.verify = function (response) {
        if (response.data.success) {
            $state.go('newsfeed');
        }
        else {
            console.log("DENIED!!");
            invalidLogin = true;
        }
    };


    this.logData = function (username, password) {
        var ls_self = this;
        //ls_self.id = null;
        var login = 'login';
        var data = $.param({
            operation: login,
            username: username,
            password: password
        });
        return $http({
            url: 'operations.php',
            method: 'post',
            data: data,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        })
            .then(
                function (response) {
                    console.log('Successfully sent form to server: ', response);
                    lis_self.verify(response);
                    user_id = response.data['user_id'];
                },
                function (response) {
                    console.log('Error', response);
                });
    }
});



blog.service('deleteBlogPostService', function ($http) {
    this.deletePost = function (blog_id) {
        var deleteBlog = 'deleteBlog';
        console.log('inside the function delete', user_id);
        var data = $.param({
            operation: deleteBlog,
            users_id: user_id,
            blog_id: blog_id
        });
        $http({
            url: 'operations.php',
            method: 'POST',
            data: data,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }

        }).then(
            function (response) {
                console.log('delete post function: ', response);
            },
            function (response) {
                console.log('You are not authorized to delete this post', response);
            });
    }
});


/**
 * Update/Edit a blog post from the dom and from the database
 *
 */

blog.service('editBlogPostService', function ($http) {
    this.editPost = function (blog_id, article) {
        var editBlogOp = 'editBlog';
        var data = $.param({
            operation: editBlogOp,
            blog_id: blog_id,
            article: article,
            users_id: user_id
        });
        $http({
            url: 'operations.php',
            method: 'POST',
            data: data,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        }).then(
            function (response) {
                console.log('update post function:', response);
            },
            function (response) {
                console.log('Unable to update post', response);
            });
    }
});

blog.service('logoutService', function ($http) {

    this.logoutData = function () {
        var los_self = this;
        var signout = 'signout';
        var data = $.param({
            operation: signout,
            users_id: user_id
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
                    console.log('Successfully logged out!', response);
                },
                function (response) {
                    console.log('Error', response);
                });
    }
});