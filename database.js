/**
 * Created by koreylo on 3/21/16.
 */


//Parameters
// blog_id : The unique id of each individual blog, this will be given when user creates a blog
// article: the content that user wants to add or change for their blog
// users_id: the unique id of that user, this will be given when a new user is created

function updateBlog(blog_id,article,users_id){
    $.ajax({
        dataType:'json',
        data:{
            operation:'editBlog',
            blog_id:blog_id,
            article:article,
            users_id:users_id
        },
        method: 'POST',
        url: 'operations.php',
        success: function (response) {

            console.log(response);

        }
    });
}


// parameters
// users_id: unique id from that user
// blog_id : unique id to the blog

function deleteBlog(usersId,blog_id){
    $.ajax({
        dataType:'json',
        data:{
            operation:'deleteBlog',
            users_id:usersId,
            blog_id:blog_id
        },
        method: 'POST',
        url: 'operations.php',
        success: function (response) {
            console.log(response);
        }
    })

}


function newUserCreate(firstname,lastname,email,username,password,phone){
    $.ajax({
        dataType:'json',
        data:{
            operation:'newUser',
            firstName:firstname,
            lastName:lastname,
            email:email,
            username:username,
            password:password,
            phone:phone
        },
        method: 'POST',
        url: 'operations.php',
        success: function (response) {
            console.log(response);
        }
    })
}

function getBlogListFromServer() {
    $.ajax({
        dataType: 'json',
        data: {
            operation: 'read'
        },
        method: 'POST',
        url: 'operations.php',
        success: function (response) {
            var responseData = response.data;
            console.log(response);


        }
    })
}

function postNewBlogArticle(added, article, title) {
    $.ajax({
        dataType: 'json',
        data: {
            operation: 'create',
            added: added,
            article: article,
            title: title,
            users_id: 1
        },
        method: "POST",
        url: "operations.php",
        success: function (response) {
            var responseData = response;
            console.log(responseData);


        }
    })
}


function getAllArticlesOneUser(userId){
    $.ajax({
        dataType:'json',
        data:{
            operation:'getAllOneUser',
            userId:userId
        },
        method: "post",
        url: "operations.php",
        success: function (response) {
            var responseData = response;
            console.log(responseData);
        }

    })
}


function deleteUser(username,password){
    $.ajax({
        dataType:'json',
        data:{
            operation:'deleteUser',
            username:username,
            password:password
        },
        method:"post",
        url:"operations.php",
        success: function(response){
            var responseData = response;
            console.log(responseData);
        }
    })
}