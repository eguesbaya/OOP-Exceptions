<?php

abstract class HighWay
{
    //Properties
    private array $currentVehicle = [];
    private int $nbLane;
    private int $maxSpeed;

    //Construct
    public function __construct(int $nbLane,int $maxSpeed)
    {
        $this->setNbLane($nbLane);
        $this->setMaxSpeed($maxSpeed);
    }

    //Methods
    public function getCurrentVehicle(): array
    {
        return $this->currentVehicle ;
    }

    public function setCurrentVehicle(Vehicle $vehicle): void
    {
        $this->currentVehicle[] = $vehicle;

    }

    public function getNbLane()
    {
        return $this->nbLane ;
    }

    public function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;

    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed ;
    }

    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;

    }

    //Abstract method
    abstract public function addVehicle( Vehicle $vehicle);


}