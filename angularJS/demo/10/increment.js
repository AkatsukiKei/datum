angular.module("increment", [])
    .directive("increment", function () {
        return {
            restrict: "E",//指令作为元素使用
            scope: {
                item: "=item",//item双向数据绑定
                property: "@propertyName",//price
                restful: "@restful",//true
                method: "@methodName"//$save
            },
            link: function (scope, element, attrs) {
                var button = angular.element("<button>").text("+");
                //创建一个按钮，内容为“+”
                button.addClass("btn btn-primary btn-xs");
                //为按钮添加样式
                element.append(button);
                //把创建的按钮插入到dom中
                button.on("click", function () {
                    scope.$apply(function () {
                        scope.item[scope.property]++;//price++
                        if (scope.restful) {
                            scope.item[scope.method]();//保存对象到服务器
                        }
                    })
                })
            }
        }
    });
