<?php
class person
{
	public $age;
	static public $max_age = 130;

	public function __construct($age) {
		if ($age > self::$max_age) {
			echo "error!";
		}
		else {
			$this->age = $age;
		}
	}

	public static function setMaxAge($age) {
		self::$max_age = $age;
	}
}

class student extends person
{
	public $studentNumber;
	public $grade;
	public $classes;

	public function __construct($age, $studentNumber, $grade, $classes) {
		parent::__construct($age);
		$this->studentNumber = $studentNumber;
		$this->grade = $grade;
		$this->classes = $classes;
	}
}
