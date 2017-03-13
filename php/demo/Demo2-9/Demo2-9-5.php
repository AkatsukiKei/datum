<?php
class person
{
	private $name;
	private $gender;
	private $height;
	private $age;

	public function __construct($name, $gender, $height, $age) {
		$this->name = $name;
		$this->gender = $gender;
		$this->height = $height;
		$this->age = $age;
	}

	public getName() {
		return $this->name;
	}

	public setName($name) {
		$this->name = $name;
	}

	public function eat() {
		echo "eating";
	}

	public function sleep() {
		echo "sleeping";
	}

	public function study() {
		echo "studing";
	}

	private function kongfu() {
		echo "kongfu";
	}
}

$p1 = new person('张三', 'male', 50, 0);
echo $p1->getName();










