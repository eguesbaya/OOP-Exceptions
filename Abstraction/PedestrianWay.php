<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
        // Properties
        
        private int $nbLane = 1;
        private int $maxSpeed = 10;
    
    
    
        //Construct

    public function __construct(int $nbLane,int $maxSpeed)
    {
        parent:: __construct($nbLane, $maxSpeed);
    }

    //Method
    public function addVehicle(Vehicle $vehicle): void
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
            $this->setCurrentVehicle($vehicle);
        }

        
    }

}
