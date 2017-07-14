<?php

class Animal {
	public $name;
	public $countOfLeges;
	public $hasFurr;
	public $food;

	public function __construct($name, $legs, $furr, $food) {
		$this->name = $name;
		$this->countOfLeges = $legs;
		$this->hasFurr = $furr;
		$this->food = $food;		
	}

	public function running($name, $speed) {
		show("$name can run at $speed kilometres per hour");
	}

	public function eat($name, $food) {
		show("$name is eating $food");
	}

	public function talk($name, $wayoftalking) {
		show("$name says $wayoftalking");
	}

	public function sleep($name, $time) {
		show("$name sleeps for a $time hours per day");
	}
	
}

class Dog extends Animal {
	public $size;
	public function talk($name, $wayoftalking) {
		show("$name says $wayoftalking");
	}
}

class Fish extends Animal {
	public $swimSpeed;
	public function running($name, $speed) {
		show("Iam swimming");
	}
}

class Bird extends Animal {
	public $canfly;
	public function run($name, $speed) {
		show("$name is flying at $speed");
	}
}

// run talk eat sleep