<?php
$name = '测试用户';
$pswd = '123456';

echo <<<STR
    <form action="" method="post">
        用户名: <input type="text" name="user" value="{$name}" /><br />
        密码: <input type="password" name="pswd" value="{$pswd}" /><br />
        <input type="submit" name="submit" value="登录" />
    </form>
STR;
