<?php

namespace classes;


class Animal
{
    public string $species; 
    public string $color; 
    public static int $totalAnimals = 0; 

    public function __construct($species, $color)
    {
        $this->species = $species;
        $this->color = $color;
        self::$totalAnimals++; 
    }

    public function getAnimalDetails(): string
    {
        return "This is a {$this->color} {$this->species}.<hr>";
    }

    public static function displayAnimalCount(): void
    {
        echo "Total animals: " . self::$totalAnimals . "<hr>";
    }
}


$animal = new Animal('cat', 'white');
echo $animal->getAnimalDetails();
Animal::displayAnimalCount();


class Bird extends Animal
{
    public float $wingSpan; 

    public function __construct($species, $color, $wingSpan)
    {
        parent::__construct($species, $color); 
        $this->wingSpan = $wingSpan;
    }

    public function getBirdDetails(): string
    {
        return "This is a {$this->color} {$this->species} with a wingspan of {$this->wingSpan} meters.<hr>";
    }
}


interface Flyable
{
    public function canFly(): string;
}


class Fish extends Animal implements Flyable
{
    public bool $canSwim; 

    public function __construct($species, $color, $canSwim)
    {
        parent::__construct($species, $color);
        $this->canSwim = $canSwim;
    }

    public function canFly(): string
    {
        return "Fish cannot fly.<hr>";
    }

    public function getSwimDetails(): string
    {
        return "This {$this->species} is {$this->color} and " . ($this->canSwim ? "can swim." : "cannot swim.") . "<hr>";
    }
}



