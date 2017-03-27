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
