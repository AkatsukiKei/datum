angular.module("Directives", ["Services"])
    .directive("triButton", function (logService) {
        return {
            scope: { counter: "=counter" },
            link: function (scope, element, attrs) {
                element.on("click", function (event) {
                    logService.log("单击的按钮是: " + event.target.innerText);
                    scope.$apply(function () {
                        scope.counter++;
                    });
                });
            }
        }
    });
