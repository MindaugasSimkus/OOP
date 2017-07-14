<?php

class Task implements TaskInterface {
	public $title;
	private $isComplete;
	public $description;
	public $deadline;

	public function __construct($title, $desc) {
		$this->title = $title;
		$this->description = $desc;
	}

	public function __get($att) { //getter
		show("Trying to get $att value");
		return $this->isComplete;
	}
	public function __set($att, $value) { //setter
		show("Trying to set $att value to $value");
		return $this->$att = $value;
	}

	public function getProducts() {
		show("Im going to the shop to get some products");
	}
	//task interface requirement
	public function getDaysToDeadline() {
		//calculating days
		return 44;
	}
	public function getAge() {
		//calculating days since created
		return 21;
	}



}












// class car {

// 	public $make;
// 	private $model;
// 	public $owner;

// 	public function __construct($owner) {
// 		$this->owner = $owner;
// 	}

// 	public function set_model($model) {
// 		$this->model = $model;
// 	}

// 	public function drive($speed) {
// 		echo "We are going somewhere at speed of $speed<br/>";
// 	}
// 	public function stop() {
// 		echo "Breaking my $this->model<br/>";
// 	}

// 	public function get_model() {
// 		return $this->model;
// 	}
// }

// $mindes_auto = new car("Mindaugas");
// $mindes_auto->make = "BMW";
// $mindes_auto->set_model("M4");
// $mindes_auto->get_model();
// $mindes_auto->drive(280);
// $mindes_auto->stop();

// print_r($mindes_auto);






//echo $mindes_auto->model;
// $petro_auto = new car();
// $petro_auto->make = "Lada";
// $petro_auto->model = "5";

// $linos_auto = new car();
// $linos_auto->make = "Fiat";
// $linos_auto->model = "500";


//print_r ($mindes_auto);
// print_r ($petro_auto);
// print_r ($linos_auto);

//$cars = [$mindes_auto, $petro_auto, $linos_auto];

//print_r($cars);

//echo $linos_auto->make;
//echo $cars[2]->make;