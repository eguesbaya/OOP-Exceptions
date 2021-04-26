<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Car extends Vehicle implements LightableInterface//The parent class is Vehicle

{
    //Const properties
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    //Properties
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBreak;

    //Methods

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }

    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setHasParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start($hasParkBrake): string
    {
        if ($hasParkBrake == true) {
            throw new Exception("Brake is active.");
        }
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff() : bool {
        return false;
    }

}
