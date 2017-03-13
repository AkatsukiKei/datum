<?php
//删除cookie
setcookie("username", null, time()-100);
setcookie("userrole", null, time()-100);

var_dump($_COOKIE);