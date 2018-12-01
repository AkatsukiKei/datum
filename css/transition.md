# transition

> transition: <过渡属性名称> <过渡时间> <过渡模式>
>
> transition-property: <过渡属性名称>
>
> transition-duration: <过渡时间>
>
> transition-timing-function: ease|linear|ease-in|ease-out|ease-in-out

* -webkit-transition
* -moz-transition
* -o-transition

```css
-webkit-transition: color 1s ease;
-webkit-transition:height 3s;
```

#### demo

css

```css
#block{
    width: 400px;
    height: 400px;
    background: #69c;
    margin: 0 auto;

    -webkit-transition: background 3s ease-in;
}
#block:hover{
    background: red;
}
```

html

```html
<div id="block"></div>
```

