/**
 * Created by koreylo on 3/21/16.
 */


function updateBlog(title,article,users_id){
    $.ajax({
        dataType:'json',
        data:{
            operation:'update',
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
            operation:'delete',
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