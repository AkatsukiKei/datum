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
