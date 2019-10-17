<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bike = new Bicycle('Red', 1);

echo "Color: " . $bike->getColor() . '<br />';
echo "Number of seats: " . $bike->getNbSeats() . '<br />';

echo $bike->forward();
echo '<br /> Bike speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br />';

echo $bike->brake();
echo '<br /> Bike speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br />';

echo $bike->brake();

echo '<br />--------------------------<br />';

$car = new Car('Blue', 5, 'electric');

echo "Color: " . $car->getColor() . '<br />';
echo "Number of seats: " . $car->getNbSeats() . '<br />';
echo 'Energy of the car : ' . $car->getEnergy() . '<br>';

echo $car->forward();
echo '<br /> Speed of the car : ' . $car->getCurrentSpeed() . ' km/h' . '<br />';
echo $car->brake();
echo '<br /> Speed of the car : ' . $car->getCurrentSpeed() . ' km/h' . '<br />';

echo $car->brake();

echo '<br />--------------------------<br />';

$truck = new Truck('Green', 4, 'fuel', 20);

echo "Color: " . $truck->getColor() . '<br />';
echo "Number of seats: " . $truck->getNbSeats() . '<br />';
echo 'Energy of the truck : ' . $truck->getEnergy() . '<br>';
echo 'Truck loading : ' . $truck->full() . '<br>';

echo $truck->forward();
echo '<br /> Speed of the truck : ' . $truck->getCurrentSpeed() . ' km/h' . '<br />';
echo $truck->brake();
echo '<br /> Speed of the truck : ' . $truck->getCurrentSpeed() . ' km/h' . '<br />';

echo $truck->brake();
