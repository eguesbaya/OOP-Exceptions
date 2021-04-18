<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{

    //Const properties
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    //Private properties
    private int $storageSpace;
    private int $loading = 0;
    private string $energy = 'fuel';

    public function __construct(int $storageSpace, string $color,int $nbSeats, string $energy)
    {
        parent:: __construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageSpace($storageSpace);
    }

    //Public functions

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this-> energy = $energy;
        }
        return $this;
    }

    public function getStorageSpace(): int
    {
        return $this->storageSpace;
    }

    public function setStorageSpace(int $storageSpace)
    {
        $this->storageSpace = $storageSpace;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading)
    {
        $this->loading = $loading;
    }

    public function isLoading()
    {
        if($this->getLoading < $this->getStorageSpace){
            $message = "in filling";            
        } else if ($this->getLoading >= $this->getStorageSpace){
            $message = "full";

        } else {
            $message = "truck is empty";
        }
    }





}