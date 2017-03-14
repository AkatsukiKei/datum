var app = angular.module("myApp", []);
// parent-controller
app.controller("myCtrl", function($scope){
    // 原型方式继承
    $scope.data = {
        dataValue: "luxiaojia"
    };
    $scope.reverseText = function(){
        $scope.data.dataValue = $scope.data.dataValue.split("").reverse().join("");
    };
    $scope.changeCase = function(){
        var result = [];
        angular.forEach($scope.data.dataValue.split(""), function(char, index){
            result.push(index%2==1 ? char.toString().toUpperCase() : char.toString().toLowerCase());
        });
        $scope.data.dataValue = result.join("");
    };
});
// first-controller
app.controller("myCtrl1", function($scope){
    $scope.changeCase = function(){
       $scope.data.dataValue = $scope.data.dataValue.toUpperCase();
    };
});
// second-controller
app.controller("myCtrl2", function($scope){
    $scope.changeCase = function(){
       $scope.data.dataValue = $scope.data.dataValue.toLowerCase();
    };
    $scope.shiftFour = function () {
        var result = [];
        angular.forEach($scope.data.dataValue.split(""), function (char, index) {
            result.push(index<4 ? char.toUpperCase() : char);
        });
        $scope.data.dataValue = result.join("");
    }
});
