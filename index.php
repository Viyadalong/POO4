<?php

require 'Car.php';

$car = new Car('green', 4, 'electric');
$car->setParkBrake(true);


try {
    echo $car->start();
} catch (Exception $e) {
    $car->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut<br>";
}



$car2 = new Car('green', 4, 'electric');
$car2->setParkBrake(false);


try {
    echo $car2->start();
} catch (Exception $e) {
    $car->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}