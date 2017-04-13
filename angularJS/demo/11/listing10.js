angular.module('route1', ['ngRoute'])
    .config(function($routeProvider){
        $routeProvider
            .when('/',{
                template:'这是当前页面'
            })
            .when('/post',{
                templateUrl:'aa.html',
                controller:"post1"
            })
            .when('/post/:id', {
                templateUrl: 'bb.html',
                controller:"postid"
            })
    })
    .controller('post1',function ($scope) {
        //console.log($scope.posts[0].id);
    })
    .controller('postid',function ($scope, $routeParams) {
        $scope.msg = 'id: ' + $routeParams.id;
        console.log($scope.msg);
    });