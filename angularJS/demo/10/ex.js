angular.module("exampleApp", [ "ngResource"])
    //必须注入ngResource模块
.constant("baseUrl", "http://localhost:2403/users/")
//.constant（变量，值）定义全局变量
.controller("defaultCtrl", function ($scope, $http, $resource, baseUrl) {
    var res = $resource(baseUrl + ':userId', {userId: '@id'},
        {create:{method: "POST"}, save:{method: "PUT"}});
    $scope.users = res.query();
    $scope.add= function (obj) {
         new res(obj).$create();
    };
    $scope.edit = function (obj) {
        obj.$get({userId: obj.id}, function () {
            console.log(obj.name);
            obj.name = "张三";
            obj.$save();
            console.log('成功');
        }, function () {
            console.log('失败');
        });
    };
    $scope.del=function(obj){
        obj.$delete({userId: obj.id}, function () {
              console.log('成功');
        }, function () {
            console.log('失败');
        })
    }
});

