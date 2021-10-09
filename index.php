<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue',0);
var_dump($bike);
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();


$car = new Car('red', 5, 'SP-98');
var_dump($car);

echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h <br>';
echo $car->forward();
echo '<br> Vitesse de la voiture: ' . $car->getCurrentSpeed() . ' km/h <br>';
echo $car->brake();
