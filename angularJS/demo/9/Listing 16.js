angular.module("promiseapp", [])
.directive("promiseWorker", function($q) {
    var deferred = $q.defer();
    //创建一个deferred对象
    return {
        link: function(scope, element, attrs) {
            element.find("button").on("click", function (event) {
                //注册监听按钮的click事件并处理
                var buttonText = event.target.innerText;
                //获取触发click事件的dom元素的文本
                if (buttonText == "中止") {
                    deferred.reject("中止");
                    //将deferred活动设置为拒绝状态
                } else {
                    deferred.resolve(buttonText);
                    //将deferred活动设置为完成状态
                }
            });
        },
        controller: function ($scope, $element, $attrs) {
            this.promise = deferred.promise;
        }
    }
})
.directive("promiseObserver", function() {
    return {
        require: "^promiseWorker",
        //添加依赖，^向父级查找controller的返回值
        link: function (scope, element, attrs, ctrl) {
            ctrl.promise.then(function (result) {
                element.text(result);
                //成功，向promise-observer指令应用的视图添加文本，输出buttonText
            }, function (reason) {
                element.text("失败(" + reason + ")");
                //失败，向promise-observer指令应用的视图添加文本，输出“失败(中止)”
            });
        }
    }
});
