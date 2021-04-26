<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object-Orientated Programming</title>
</head>




<body>
<h1>Object-Orientated Programming: Basics</h1>

<h2>Part 1: Faire ses premières classes</h2>
<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bike = new Bicycle('blue', 1);
$bike->getCurrentSpeed = 0;

// Moving bike

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();


// New car

$peugeot = new Car('grey', 4, 'fuel');
$peugeot->getCurrentSpeed = 0;

// Moving car
echo $peugeot->forward();
?>

<h2>Part 2 : Héritage et parentalité</h2>

<?php //New truck
$volvo = new Truck (100, 'red', 3, 'fuel');

//Moving truck
echo $volvo->forward();
echo '<br> Vitesse du camion : ' . $volvo->getCurrentSpeed() . ' km/h' . '<br>';
echo $volvo->brake();
echo '<br> Vitesse du camion : ' . $volvo->getCurrentSpeed() . ' km/h' . '<br>';
echo $volvo->brake();
?>


<h2>Part 3 : Abstraction</h2>

<?php
require_once './Abstraction/HighWay.php';
require_once './Abstraction/PedestrianWay.php';
require_once './Abstraction/MotorWay.php';
require_once './Abstraction/ResidentialWay.php';
// New object: test
//$vehicle = new Vehicle('black', 2, 60);

$rueDeBourgogne = new PedestrianWay (2,5);
$rueDeBourgogne->addVehicle($bike);
var_dump($rueDeBourgogne->getCurrentVehicle());

$rueDePounelle = new ResidentialWay(1, 30);
$rueDePounelle->addVehicle($peugeot);
var_dump($rueDePounelle->getCurrentVehicle());

$tangantielle = new MotorWay(4, 70);
$tangantielle->addVehicle($peugeot);
var_dump($tangantielle->getCurrentVehicle());
?>

<h2>Part 4 : Exceptions </h2>

<?php



try {
  
    echo $peugeot->start(true);
} catch (Exception $e){
    $peugeot->setHasParkBrake(false);
} finally{
    echo 'Ma voiture roule comme un donut.';
}


?>

<h2>Part 5 : Implémentation d'interfaces</h2>

<?php
echo $peugeot->switchOn();
echo $peugeot->switchOff();

echo $bike->switchOn();

?>


</body>
</html>







