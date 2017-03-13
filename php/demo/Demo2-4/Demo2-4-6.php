<?php
$str = ' testuser ';
echo strlen($str) . '<br />';
echo trim($str) . '<br />';
echo strlen(trim($str)) . '<br />';

$str2 = 'user1,user2,user3,';
echo trim($str2, ",") . '<br />';

$str3 = 'user1,user2, ,';
echo trim($str3, ",") . '<br />';

echo trim($str3, ", ");