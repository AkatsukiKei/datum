<?php
//控制cookie有效期
setcookie("username", "testuser", time()+60);
setcookie("userrole", "admin", time()+60);
echo "cookie数据已存储";