<?php
//根据出生日期计算年龄，不使用数组
function getAge($year, $month, $day) {
	$nowYear = date("Y");
	$nowMonth = date('m');
	$nowDay = date('d');

	if ($nowYear < $year) return '错误的出生年月';

	$age = $nowYear - $year;
	if ($month >= $nowMonth && $day > $nowDay) {
		$age--;
	}
	return $age;
}

$birthYear = 2012;
$birthMonth = 3;
$birthDay = 19;
echo getAge($birthYear, $birthMonth, $birthDay);


//根据出生日期计算年龄，使用数组
function getAge2($brithday) {
	$now = explode('-', date("Y-m-d"));
	$birth = explode('-', $brithday);

	if ($now[0] < $birth[0]) return '错误的出生年月';

	$age = $now[0] - $birth[0];
	if ($birth[1] >= $now[1] && $birth[2] > $now[2]) {
		$age--;
	}
	return $age;
}

echo getAge2('2015-3-9');