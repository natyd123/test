<?php
include "Truck.php";

$truck = new Truck("Volvo", "blue", 80, 12, 500);

$truck->boardPerson("Petr");
$truck->loadCargo(200);

echo "Model: " . $truck->model . "<br>";
echo "Color: " . $truck->color . "<br>";
echo "Gas: " . $truck->gas_in_tank . "<br>";
echo "Cargo: " . $truck->cargoWeight . " kg<br>";
echo "Driver: " . $truck->person;
