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

function postNewBlogArticle(article,title){
    $.ajax({
        dataType:'json',
        data:{
            operation:'create',
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

function deleteUser(username){
    $.ajax({
        dataType:'json',
        data:{
            operation:'deleteUser',
            user_id:username,
        },
        method:"post",
        url:"operations.php",
        success: function(response){
            var responseData = response;
            console.log(responseData);
        }
    })
}

function login(username, password) {
    $.ajax({
        dataType: 'json',
        data: {
            operation: 'login',
            username: username,
            password: password
        },
        method: "post",
        url: "operations.php",
        success: function (response) {
            var responseData = response;
            console.log(responseData);
        }
    })
}

// function uploadProfilePic(fileToUpload){
//     $.ajax({
//         type:'post',
//         url:"operations/upload.php",
//         data:{
//             fileToUpload:fileToUpload,
//             submit:'gogogo'
//         },
//         cache:false,
//         contentType:false,
//         processData:false,
//         success: function(response){
//             var responseData=response;
//             console.log(responseData);
//         }
//     })
//
// }
$(document).ready(function(){
    $('#button').click(function(){
        event.preventDefault();
        upload();
    })
});



function upload() {
    var formObj = $("#multiform");
    var formURL = formObj.attr("action");
    var formData = new FormData(formObj[0]);
    $.ajax({
        url: formURL,
        type: 'POST',
        data: formData,
        mimeType: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
            console.log(response);
        }
    })
}