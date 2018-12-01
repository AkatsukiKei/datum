# animation

#### 设置3D场景

```css
-webkit-perspective: 800;             /* 窗口距离三维物体800像素 */
-webkit-perspective-origin: 50% 50%;  /* 观察视点x轴50%，y轴50%（浏览器正中央） */
```

#### 使用transform属性调整元素

**translate**

* translateX( x px )    // 向右
* translateY( y px )    // 向下
* translateZ( z px )    // 向外

**rotate**

* rotateX( x deg )
* rotateY( y deg )
* rotateZ( z deg )

#### 使用transform-origin属性调整旋转中心

|      | 属性值 |
| :----: | ---- |
|x轴|left；center；right|
|y轴|top；center；bottom|
|z轴|length px|
#### demo

css

```css
#experiment{
    -webkit-perspective: 800;
    -webkit-perspective-origin: 50% 50%;
    -webkit-transform-style: -webkit-preserve-3d;
}
#block{
    width: 400px;
    height: 400px;
    background: #69c;
    margin: 0 auto;

    -webkit-transform: rotateX(45deg);
    /*-webkit-transform: rotateY(45deg);*/
    /*-webkit-transform: rotateZ(45deg);*/
}
```

html

```html
<div id="experiment">
    <div id="block"></div>
</div>
```

