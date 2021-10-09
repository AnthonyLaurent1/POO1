<?php

class Bicycle
{
    // propriétés

    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 1;

    private int $nbWheels = 2;

    // methodes

    public function __construct(string $color, int $currentSpeed)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
    }

    // j'avance
    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    // je freine
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    //getteurs
    public function getColor(): string
    {
        return $this->color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    // setteurs
    public function setColor(string $color): void
    {
        $this->color = $color;
    }


    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
        }
    }




}
