<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $energy;
    private $energyLevel;
    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
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

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function getParkBrake():bool
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start()
    {
        if ($this->hasParkBrake === true) {
            throw new Exception("Le frein à main est mis");
        }
        $this->currentSpeed = 1;
        return "Start !";
    }
}