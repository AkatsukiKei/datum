## 创建数组
1. 使用Array构造函数  
``` javascript
// new也可以省略

var colors = new Array();
var colors = new Array(3);
var colors = new Array("gold", "sliver");
```
2. 数组字面量表示法
``` javascript
var colors = [];
var colors = ["gold", "sliver"];
```
## 检测数组
``` javascript
if(Array.isArray(value)){
    // ...
}
```
`value instanceof Array`也可以检测，但是在多框架的网页中可能会出问题。
## 转换方法
toString( )会返回逗号分隔的字符串，valueOf( )会返回数组  
join( )如果不传参或传一个undefined，结果和toString( )相同
``` javascript
var colors = ["gold", "sliver"];
console.log(colors.toString());  // gold,sliver
console.log(colors.valueOf());   // ["gold", "sliver"]
console.log(colors.join("||"));  // gold||sliver
```
## 栈方法（LIFO）
push( )入栈，返回数组长度，可以传多个参数  
pop( )出栈，返回删除的值（最后一项）
## 队列方法（FIFO）
push( )入队，返回数组长度，可以传多个参数  
shift( )出队，返回删除的值（第一项）  
unshift( )与shift( )作用相反，可以用unshift( )和pop( )模拟反过来的队列操作
## 重排序方法
reverse( )会反转数组项的顺序
``` javascript
var arr = [0, 1, 5, 10, 15];
console.log(arr.reverse());   // [15, 10, 5, 1, 0]
```
sort( )按升序排列数组项，__会调用每个数组项的toString( )方法__，所以尽管下面的数组已经是升序的，但是调用sort( )后结果会改变
``` javascript
var arr = [0, 1, 5, 10, 15];
console.log(arr.sort());      // [0, 1, 10, 15, 5]
```
为了解决这个问题，我们可以自己定义一个比较函数，作为sort( )的参数
``` javascript
function compare(value1, value2){
    if(value1 > value2){
        return 1;
    } else if(value1 < value2){
        return -1;
    } else{
        return 0;
    }
}
var arr = [0, 1, 5, 10, 15];
console.log(arr.sort(compare));  // [0, 1, 5, 10, 15]
```
对于数值类型或valueOf( )方法会返回数值类型的对象类型，可以定义一个更简单的比较函数
``` javascript
function compare(value1, value2){
    return value2 - value1;
}
```
## 操作方法
concat( )可以基于当前数组中的所有项创建一个新数组
``` javascript
var colors = ["red", "green", "blue"];
console.log(colors.concat("yellow", ["black", "brown"]));
// ["red", "green", "blue", "yellow", "black", "brown"]
```
slice( )能够基于当前数组中的一或多个项创建一个新数组  
如果有一个参数，返回从指定位置开始到数组末尾的所有项；  
如果有两个参数，返回起始和结束位置之间的项，__但不包括结束位置的项。__
``` javascript
var colors = ["red", "green", "blue", "yellow", "black", "brown"];
console.log(colors.slice(1));      // ["green", "blue", "yellow", "black", "brown"]
console.log(colors.slice(1,4));    // ["green", "blue", "yellow"]
```
splice( )有很多用法，主要用途是向数组的中部插入项，返回从原始数组中删除的项组成的数组（没有删除返回空数组）  
使用方法有3种：  
**删除** 可以删除任意数量的项，参数为：要删除的第一项的位置，要删除的项数  
**插入** 可以向指定位置插入任意数量的项，参数为：起始位置，0（要删除的项数），要插入的项  
**替换** 可以向指定位置插入任意数量的项，且同时删除任意数量的项，参数为：起始位置，要删除的项数，要插入的项（插入的项数不必与删除的项数相等）
``` javascript
var colors1 = ["red", "green", "blue"];
console.log(colors1.splice(0, 1));                       // ["red"]
console.log(colors1);                                    // ["green", "blue"]

var colors2 = ["red", "green", "blue"];
console.log(colors2.splice(1, 0 ,"yellow", "orange"));   // []
console.log(colors2);                                    // ["red", "yellow", "orange", "green", "blue"]

var colors3 = ["red", "green", "blue"];
console.log(colors3.splice(1, 1 ,"gold", "sliver"));     // ["green"]
console.log(colors3);                                    // ["red", "gold", "sliver", "blue"]
```
## 位置方法
indexOf( )从数组的开头向后找  
lastIndexOf( )从数组的末尾向前找  
两个参数：要查找的项，查找起点位置的索引（可选）  
返回查找项在数组中的位置，没找到返回-1，__比较时会使用全等操作符（===）__
``` javascript
var arr = [1,2,3,4,5,4,3,2,1];
console.log(arr.indexOf(4));          // 3
console.log(arr.indexOf(4, 4));       // 5
console.log(arr.lastIndexOf(4));      // 5
console.log(arr.lastIndexOf(4, 4));   // 3
```
