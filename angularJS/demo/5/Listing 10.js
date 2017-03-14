var app = angular.module("myApp", []);
// parent-controller
app.controller("myCtrl", function($scope){
    $scope.dataValue = "luxiaojia";
    $scope.reverseText = function () {
        $scope.dataValue = $scope.dataValue.split("").reverse().join("");
    };
    $scope.changeCase = function () {
        var result = [];
        angular.forEach($scope.dataValue.split(""), function(char, index){
            result.push(index%2==1 ? char.toString().toUpperCase() : char.toString().toLowerCase());
        });
        $scope.dataValue = result.join("");
    };
});
// first-controller
app.controller("myCtrl1", function($scope){
    $scope.changeCase = function(){
       $scope.dataValue = $scope.dataValue.toUpperCase();
    };
});
// second-controller
app.controller("myCtrl2", function($scope){
    $scope.changeCase = function(){
       $scope.dataValue = $scope.dataValue.toLowerCase();
    };
    $scope.shiftFour = function () {
        var result = [];
        angular.forEach($scope.dataValue.split(""), function(char, index){
            result.push(index<4 ? char.toUpperCase() : char);
        });
        $scope.dataValue = result.join("");
    }
});
