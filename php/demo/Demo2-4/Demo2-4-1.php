<?php
$username = 'testUser';
$str1 = 'Welcome,$username';
$str2 = "Welcome,$username";
$username = 'testUser2';

echo $str1 . '<br />';
echo $str2 . '<br />';

echo '$username\'s cart' . '<br />';
echo "$username's cart" . '<br />';

echo "variable name is \$username";