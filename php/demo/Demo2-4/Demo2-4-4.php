<?php
    //1. 定义一些变量
    $name = '张三';
    $age = 18;
    
    //2. 输出张三的信息
    echo "姓名：{$name}<br />";
    echo "年龄：{$age}<br />";
    
    //3. 查看变量的详细信息
    var_dump($name);
    var_dump($age);
    
    //4. 查看变量详细信息之前，添加<pre>标签
    echo '<pre>';
    var_dump($name);
    var_dump($age);
    echo '</pre>';
?>