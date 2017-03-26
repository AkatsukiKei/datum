angular.module("Services", [])
    .provider("logService", function () {
        return {
            messageCounterEnabled: function (setting) {
                if (angular.isDefined(setting)) {
                    //判断一个数据是否是defined类型
                    counter = setting;
                    console.log('counter:'+counter);
                    return this;
                } else {
                    return counter;
                }
            },
            debugEnabled: function(setting) {
                if (angular.isDefined(setting)) {
                    debug = setting;
                    console.log('debug:'+debug);
                    return this;
                } else {
                    return debug;
                }
            },
            $get: function () {
                return {
                    messageCount: 0,
                    log: function (msg) {
                        if (debug) {
                            console.log("(LOG"
                                + (counter ? " + " + this.messageCount++ + ") " : ") ")
                                + msg);
                        }
                    }
                };
            }
        }
    });
