<?php
include "Car.php";

class Truck extends Car {

    public $cargoWeight;

    public function __construct($m, $c, $g, $cons, $cargoWeight) {
        parent::__construct($m, $c, $g, $cons);
        $this->cargoWeight = $cargoWeight;
    }

    public function loadCargo($weight) {
        $this->cargoWeight += $weight;
    }
}
