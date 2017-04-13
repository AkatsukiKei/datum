//使用$resourse与服务器通信
angular.module("exampleApp", ["increment", "ngResource"])
    //依赖模块increment，并注入ngRresource
.constant("baseUrl", "http://localhost:2403/products/")
    //.constant（变量，值）定义全局变量
    // 获取数据源接口
.controller("defaultCtrl", function ($scope, $http, $resource, baseUrl) {
    //在controller中调用全局变量baseUrl
    $scope.displayMode = "list";
    //初始化：显示产品列表
    $scope.currentProduct = null;
    //编辑视图中的双向数据绑定的input初始化为空
    $scope.productsResource = $resource(baseUrl + ":id", { id: "@id" },
            { create: { method: "POST" }, save: { method: "PUT" } });
    //自定义create方法、save方法
    $scope.listProducts = function () {
        $scope.products = $scope.productsResource.query();
    };
    //显示产品
    $scope.deleteProduct = function (product) {
        //$delete()方法从服务器删除对象
        product.$delete().then(function () {
            $scope.products.splice($scope.products.indexOf(product), 1);
            //splice(index,howmany)方法可删除从index处开始的howmany个元素。
        });

        $scope.displayMode = "list";
    };
    //删除产品
    $scope.createProduct = function (product) {
        new $scope.productsResource(product).$create().then(function (newProduct) {
            $scope.products.push(newProduct);
            ////push() 方法可向数组的末尾添加一个或多个元素，并返回新的长度。
            $scope.displayMode = "list";
        });
    };
    //添加产品
    $scope.updateProduct = function (product) {
        product.$save();
        //$save()方法保存对象到服务器
        $scope.displayMode = "list";
    };
    //更新产品
    $scope.editOrCreateProduct = function (product) {
        $scope.currentProduct = product ? product : {};
        //判断是修改或添加，返回要编辑的对象
        $scope.displayMode = "edit";
        //转为编辑视图
    };
    //修改或添加
    $scope.saveEdit = function (product) {
        if (angular.isDefined(product.id)) {
            //若产品存在则调用更新函数
            $scope.updateProduct(product);
        } else {
            //若产品不存在则调用添加函数
            $scope.createProduct(product);
        }
    };
    //保存修改
    $scope.cancelEdit = function () {
        if ($scope.currentProduct && $scope.createProduct.$get) {
            $scope.currentProduct.$get();
            //$get()方法从服务器更新数据
        }
        $scope.currentProduct = {};
        $scope.displayMode = "list";
    };
    //取消修改
    $scope.listProducts();
    //调用函数，显示产品列表
});
