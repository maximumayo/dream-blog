
blog.service('getBlogService', function($http){
    this.getData = function(){
        var read = 'read';
        var data = $.param({operation: read});
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
                },
                function(response){
                    console.log('Error', response);
                }
            )
    }
});