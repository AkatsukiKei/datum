//不使用原型的service方法
angular.module("Services", [])
    .service("logService", function () {
        return {
            messageCount: 0,
            log: function (msg) {
                console.log("Debug: " + (this.messageCount++) + " " + msg);
            }
        };
    });
