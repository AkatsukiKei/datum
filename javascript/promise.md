# Promise
`promise`是一种异步方式处理值的方法，代表了一个函数最终可能的返回值或抛出的异常。  
`promise`主要是为了解决回调函数的问题。
## angular中的promise
`$q`是angular封装的promise服务。  
我们可以使用`$q`的defer( )方法，创建一个deferred对象，通过promise属性，将这个对象变成一个promise对象。  
defer( )对象提供三种方法：resolve( )、reject( )、notify( )  
* resolve( )用来执行deferred promise
* reject( )用来拒绝deferred promise
* notify( )用来获取deferred promise的状态
<br>
html:
``` html
<div ng-app="MyApp">
    <div ng-controller="MyController">
        <label for="flag">成功
        <input id="flag" type="checkbox" ng-model="flag" /><br/>
        </label>
        <hr/>
        <button ng-click="handle()">点击我</button>
    </div>
</div>
```
js:
``` javascript
angular.module("MyApp", [])
.controller("MyController", ["$scope", "$q", function ($scope, $q) {
            $scope.flag = true;
            $scope.handle = function () {
            var deferred = $q.defer();
            var promise = deferred.promise;

            promise.then(function (result) {
                alert("Success: " + result);
            }, function (error) {
                alert("Fail: " + error);
            });

            if ($scope.flag) {
                deferred.resolve("you are lucky!");
            } else {
                deferred.reject("sorry, it lost!");
            }
        }
}]);
```
