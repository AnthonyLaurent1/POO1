<?php

class Car
{
    // propriétés
    private int $nbWheels = 4;

    private int $currentSpeed = 0 ;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;

    // méthodes

    public function __construct(string $color, int $nbSeats, string $energy){
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    // je demarre
    public function start(): string {
        $sentence = '';
        if ($this->currentSpeed === 0){
            $sentence = 'je démarre';
        }
        return $sentence;
    }

    // j'avance
    public function forward(): string
    {
        $this->currentSpeed = 50;
        return "Go !";
    }

    //je freine
    public function brake(): string {
        $brakeSentence = '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed-= 10;
            $brakeSentence .= 'Brake !! ' . $this->currentSpeed . ' km/h';
        }
            $brakeSentence .= "<br> I'm stopped !";
        return $brakeSentence;
    }

    // getters

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setCurrentSpeed(int $currentSpeed): void {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }



}