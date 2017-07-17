<?php

class car {
	public $manufacturer;
	public $model;
	public $dateOfManufacture;
	public $weight;
	public $colorVariety;
	public $fuelTankVolume;
	public $topSpeed;

	public function __construct($name, $model, $date, $weight, $color, $ftVolume, $tSpeed) {
		$this->manufacturer = $name;
		$this->model = $model;
		$this->dateOfManufacture = $date;
		$this->weight = $weight;
		$this->colorVariety = $color;
		$this->fuelTankVolume = $ftVolume;
		$this->topSpeed = $tSpeed;
	}

	public function maxSpeed() {	
		show("$this->manufacturer $this->model can go at $this->topSpeed kmph");
	}


	public function age() {
		$exploded_doMan = explode("-", $this->dateOfManufacture);
		$age = (date("z") + 1) - date("z", mktime(0, 0, 0, $exploded_doMan[1], $exploded_doMan[2], $exploded_doMan[0])) + 1;
		$year = 2017 - $exploded_doMan[0];
		show("$this->manufacturer $this->model was manufactured $year years and $age days ago");
	}

}