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
        url:"getAllOneUser.php",
        success: function(response){
            var responseData=response;
            console.log(responseData);
        }
        
    })
}