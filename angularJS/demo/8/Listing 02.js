angular.module("exampleApp")
.directive("triButton", function () {
    return {
        scope: { counter: "=counter" },
        link: function (scope, element, attrs) {
            element.on("click", function (event) {
                //on() 方法在被选元素及子元素上添加一个或多个事件处理程序
                console.log("单击的按钮是: " + event.target.innerText);
                //target是jQuery 1.3 新增属性，返回最初触发事件的DOM元素
                scope.$apply(function () {
                    //scope.$apply将代码添加到执行队行
                    scope.counter++;
                });
            });
        }
    }
});
