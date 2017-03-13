<h3>用户注册</h3>
<form action="" method="post">
    <table>
        <tr>
            <td align="right">用户名：</td>
            <td><input type="text" name="user" value="" /></td>
            <td align="left">用户名必须为6个字符以上（不算前后空白符）</td>
        </tr>
        
        <tr>
            <td align="right">密码：</td>
            <td><input type="password" name="pswd" value="" /></td>
            <td align="left">密码不区分大小写</td>
        </tr>
        
        <tr>
            <td align="right">用户昵称：</td>
            <td><input type="text" name="nickname" value="" /></td>
            <td align="left">昵称不能含有敏感字符，否则敏感字符被替换为***</td>
        </tr>
        
        <tr>
            <td align="right">电子邮箱：</td>
            <td><input type="text" name="email" value="" /></td>
            <td align="left">邮箱必须符合特定格式</td>
        </tr>
        
        <tr>
            <td align="right">验证码：</td>
            <td><input type="text" name="captcha" value="" />AbcD(验证码)</td>
            <td align="left">验证码不区分大小写</td>
        </tr>
        
        <tr>
            <td colspan="3"><input type="submit" name="submit" value="注册" /></td>
        </tr>
    </table>
</form>

<?php
    //1. 若用户点击“注册”按钮以后
    if (isset($_POST['submit'])) {
        //2. 获得用户输入的数据信息
        $user = $_POST['user']; //用户名
        $pswd = $_POST['pswd']; //密码
        $nickname = $_POST['nickname']; //昵称
        $email = $_POST['email']; //电子邮箱
        $captcha = $_POST['captcha']; //验证码
        
        //3. 过滤用户名前后的空白符
        $user = trim($user);
        
        //4. 校验用户名是否至少为6个字符
        if (strlen($user) < 6) {
            echo '用户名长度不符合要求<br />';
        }
        
        //5. 校验验证码是否合法
        if (strtolower($captcha) != 'abcd') {
            echo '验证码不符合要求<br />';
        }
        
        //6. 校验电子邮箱是否含有'@'字符
        if (strpos($email, '@') == 0) {
            echo '电子邮箱不是合法邮箱<br />';
        }
        
        //7. 替换用户昵称中的敏感字符
        $nickname = str_replace('敏感词', '***', $nickname);
        echo "用户昵称：{$nickname}<br />";
    }
?>