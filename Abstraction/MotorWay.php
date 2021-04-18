<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{

    // Properties
    
    private int $nbLane = 4;
    private int $maxSpeed = 130;



    //Construct
    public function __construct(int $nbLane,int $maxSpeed)
    {
        parent:: __construct($nbLane, $maxSpeed);
    }

    //Method
    public function addVehicle(Vehicle $vehicle): void
    {
        if($vehicle instanceof Car || $vehicle instanceof Truck){
            $this->setCurrentVehicle($vehicle);
        }
    }


}