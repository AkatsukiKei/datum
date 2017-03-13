<?php
$expression = '3+5*8-12';
$pattern = '/[+*-\/]/';
$operand = preg_split($pattern,$expression);
print_r($operand);