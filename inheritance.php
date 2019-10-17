<?php

class car{
	public $name, $brand, $colour, $speedMax, $numCustomer;

	public function increasesSpeed(){
		return "increasesSpeed";
	}
}

class carSport extends car{
	public $turbo = false;

	public function runTurbo(){
		$this.turbo = true;
		return "Turbo can be function!";
	}
}
$car = new carSport();
echo $car1 -> increasesSpeed();
echo "<br>";
echo $mobile -> runTurbo();
}