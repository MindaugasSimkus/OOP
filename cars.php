<?php

class car {
	public $manufacturer;
	public $model;
	public $dateOfManufacture;
	public $weight;
	public $colorVariety;
	public $fuelTankVolume;
	public $topSpeed;
	public $fuelConsumption;

	public function __construct($name, $model, $date, $weight, $color, $ftVolume, $tSpeed, $fCons) {
		$this->manufacturer = $name;
		$this->model = $model;
		$this->dateOfManufacture = $date;
		$this->weight = $weight;
		$this->colorVariety = $color;
		$this->fuelTankVolume = $ftVolume;
		$this->topSpeed = $tSpeed;
		$this->fuelConsumption = $fCons;
	}

	public function maxSpeed() {	
		show("$this->manufacturer $this->model can go at $this->topSpeed kmph.");
	}


	public function age() {
		$exploded_doMan = explode("-", $this->dateOfManufacture);
		$age = abs((date("z") + 1) - date("z", mktime(0, 0, 0, $exploded_doMan[1], $exploded_doMan[2], $exploded_doMan[0])) + 1);
		$year = 2017 - $exploded_doMan[0];
		show("$this->manufacturer $this->model was manufactured $year years and $age days ago.");
	}

	public function weight() {
		show("$this->manufacturer $this->model weights $this->weight kilos.");
	}

	public function travelDistance() {
		$distance = $this->fuelTankVolume/$this->fuelConsumption*100;
		show("$this->manufacturer $this->model can go $distance kilometres whithout refilling.");
	}

}

class sportscar extends car {
	public $to100kmph;

	public function __construct($name, $model, $date, $weight, $color, $ftVolume, $tSpeed, $fCons, $to100) {
		$this->manufacturer = $name;
		$this->model = $model;
		$this->dateOfManufacture = $date;
		$this->weight = $weight;
		$this->colorVariety = $color;
		$this->fuelTankVolume = $ftVolume;
		$this->topSpeed = $tSpeed;
		$this->fuelConsumption = $fCons;
		$this->to100kmph = $to100;
	}

	public function to100() {
		show("$this->manufacturer $this->model reaches 100 kmph in $this->to100kmph s.");
	}
}

class electriccar extends car {
	public $chargeTime;
	public $travelDistance;

	public function __construct($name, $model, $date, $weight, $color, $ftVolume, $tSpeed, $fCons, $chrgTime, $trvlDist) {
		$this->manufacturer = $name;
		$this->model = $model;
		$this->dateOfManufacture = $date;
		$this->weight = $weight;
		$this->colorVariety = $color;
		$this->fuelTankVolume = $ftVolume;
		$this->topSpeed = $tSpeed;
		$this->fuelConsumption = $fCons;
		$this->chargeTime = $chrgTime;
		$this->travelDistance = $trvlDist;
	}

	public function travelDistance() {
		show("$this->manufacturer $this->model can reach $this->travelDistance kilometres distance.");
	}
	public function chargeTime() {
		show("$this->manufacturer $this->model electric car charges for $this->chargeTime hours.");
	}
}

class tanker extends car {
	public $tankVolume;

	public function __construct($name, $model, $date, $weight, $color, $ftVolume, $tSpeed, $fCons, $tVol) {
		$this->manufacturer = $name;
		$this->model = $model;
		$this->dateOfManufacture = $date;
		$this->weight = $weight;
		$this->colorVariety = $color;
		$this->fuelTankVolume = $ftVolume;
		$this->topSpeed = $tSpeed;
		$this->fuelConsumption = $fCons;
		$this->tankVolume = $tVol;
	}

	public function tanker() {
		show("$this->manufacturer $this->model has a tank that can be filled up to $this->tankVolume litres of gas.");
	}
}