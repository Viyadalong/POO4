<?php

require 'Car.php';

require_once 'Car.php';
$car = new Car('red', 4, 'electric');
$car->setEnergyLevel(10);
$car->setnbWheels(4);
$car->setParkBrake(TRUE);
var_dump($car);
echo $car->start();
var_dump($car);
echo $car->start();
var_dump($car);
