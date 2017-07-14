<?php

include "messages.php";
//include "Task.php";
//include "Cooking.php";
include "Animal.php";

$new_animal = new Animal ("Lion", "4", true, "meat" 
	);
showa($new_animal);

$new_animal->running("Lion", 55);
$new_animal->eat("Lion", "meat");
$new_animal->talk("Lion", "Roaaawwr");
$new_animal->sleep("Lion", 8);


$dog1 = new Dog("Maze", 4, true, "meat");
$fish1 = new Fish("Slide", "0", false, "palncton");
$bird1 = new Bird("Baba", 2, true, "meat");

$dog1->size = "20 cm";
$fish1->swimSpeed = "15 nods";
$bird1->canfly = true;
$dog1->talk("Dog", "Woof woof mfcka");
$bird1->run("bird", 100);

if ($dog1 instanceof Dog) {
	show($dog1->name . " is Dog");
}


$animals = array($dog1, $fish1, $bird1);
showa($animals);














// $new_task = new Task("Go to the shop", "Buy some milk and bread");
// showa($new_task);

// $another_task = new Cooking("Make something to eat", "anything will do");
// showa($another_task);

// // $another_task->makePasta();

// // $new_task->getProducts();
// // $another_task->getProducts();

// interface TaskInterface {
// 	public function getDaysToDeadline();
// 	public function getAge();
// }

// show($new_task->getDaysToDeadline());
// show($new_task->getAge());









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