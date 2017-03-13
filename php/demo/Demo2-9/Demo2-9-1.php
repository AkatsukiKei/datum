<?php
class person
{
	public $name;
	public $gender;
	public $height;
	private $age;

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