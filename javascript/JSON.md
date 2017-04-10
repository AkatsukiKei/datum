# JSON
JSON(JavaScript Object Notation，JavaScript对象表示法)
## 语法（3种）
__简单值：__ 使用与js相同的语法，可以在JSON中表示字符串、数值、布尔值和null。  
__对象：__ 与js稍微有一些不同。下面是一个js中的对象字面量：
``` javascript
var person = {
    name : "Nicholas",
    age : 29
};
```
JSON中是这样表示的：
``` json
{
    "name" : "Nicholas",
    "age" : 29
}
```
还可以这样对象中嵌入对象：
``` json
{
    "name" : "Nicholas",
    "age" : 29,
    "school" : {
        "name" : "Merrimack College",
        "location" : "North Andover, MA"
    }
}
```
JSON对象和JavaScript对象字面量不一样的地方：没有声明变量（JSON中没有变量的概念）；没有末尾的分号；属性必须加双引号（js中可加可不加）。  
__数组：__ 与js形式相同。下面是一个js中的数组字面量：
``` javascript
var arr = [25, "hi", true];
```
JSON如下：
``` json
[25, "hi", true]
```
还可以把数组和对象结合起来，构成更复杂的数据集合：
``` json
[
    {
        "type" : "Offense",
        "hero" : [
            "Tracer",
            "Genji",
            "Pharah"
        ]
    },
    {
        "type" : "Tank",
        "hero" : [
            "D.va",
            "Roadhog"
        ]
    },
    {
        "type" : "Defense",
        "hero" : "Hanzo"
    }
]
```
## 解析与序列化
序列化：JSON.stringify( )  
解析：JSON.parse( )
``` javascript
var obj1 = {
             type : "Offense",
             hero : [
                 "Tracer",
                 "Genji",
                 "Pharah"
             ]
         };
var jsonText = JSON.stringify(obj1);
console.log(jsonText);  // {"type":"Offense","hero":["Tracer","Genji","Pharah"]}

var obj2 = JSON.parse(jsonText); //obj2与obj1相同
```
## JSONP
JSONP是JSON with padding（填充式JSON或参数式JSON）的简写，是应用JSON的新方法。JSONP是被包含在函数调用中的JSON。
``` json
callback({ "name" : "Nicholas"});
```
JSONP由两部分组成：回调函数和数据。回调函数的名字一般是在请求中指定的：
```
http://freegeoip.net/json/?callback=handleResponse
```
JSONP是通过动态\<script\>元素来使用的，使用时可以为src属性指定一个跨域URL。
