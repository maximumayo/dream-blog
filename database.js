/**
 * Created by koreylo on 3/21/16.
 */


function updateBlog(title,article,user_id){
    $.ajax({
        dataType:'json',
        data:{
            operation:'update',
            title:title,
            article:article,
            user_id:user_id
        },
        method:'POST',
        url:'index.php',
        success: function(response){



        }
    })
}