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
        url:'edit.php',
        success: function(response){

            console.log("success");

        }
    })
}