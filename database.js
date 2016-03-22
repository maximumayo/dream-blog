/**
 * Created by koreylo on 3/21/16.
 */


function updateBlog(title,article,users_id){
    $.ajax({
        dataType:'json',
        data:{
            operation:'editBlog',
            title:title,
            article:article,
            users_id:users_id
        },
        method:'POST',
        url:'operations.php',
        success: function(response){

            console.log(response);

        }
    })
}

function deleteBlog(title,blogId){
    $.ajax({
        dataType:'json',
        data:{
            operation:'deleteBlog',
            title:title,
            blogId:blogId
        },
        method:'POST',
        url:'operations.php',
        success:function(response){
            console.log(response);
        }
    })

}

function newUserCreate(firstname,lastname,email,username,password){
    $.ajax({
        dataType:'json',
        data:{
            operation:'newUser',
            firstName:firstname,
            lastName:lastname,
            email:email,
            username:username,
            password:password
        },
        method:'POST',
        url:'operations.php',
        success:function(response){
            console.log(response);
        }
    })
}

function getBlogListFromServer(){
    $.ajax({
        dataType:'json',
        data:{
            operation:'read'
        },
        method:'POST',
        url:'operations.php',
        success: function(response){
            var responseData = response.data;
            console.log(response);


        }
    })
}

function postNewBlogArticle(added,article,title){
    $.ajax({
        dataType:'json',
        data:{
            operation:'create',
            added:added,
            article:article,
            title:title,
            users_id:1
        },
        method:"POST",
        url:"operations.php",
        success: function(response){
            var responseData=response;
            console.log(responseData);


        }
    })
}

function getAllArticlesOneUser(username){
    $.ajax({
        dataType:'json',
        data:{
            operation:'getAllOneUser',
            username:username
        },
        method:"post",
        url:"operations.php",
        success: function(response){
            var responseData=response;
            console.log(responseData);
        }

    })
}