function getBlogListFromServer(){
    $.ajax({
        dataType:'json',
        data:{
           operation:'read'
        },
        method:'POST',
        url:'get.php',
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
        url:"create.php",
        success: function(response){
            var responseData=response;
            console.log(responseData);
            // if (response.success){
            //     console.log(response);
            //     addClicked(response.id);
            // }else if (!response.success){
            //     console.log(response);
            //     alert(response.errors[0]);
            // }

        }
    })
}
