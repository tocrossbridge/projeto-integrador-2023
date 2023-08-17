<?php
require_once 'Tamagotchi.php';

class Shark extends Tamagotchi {

    public string $specie;

    public function __construct($name, $color, $specie){
        $this->name = $name;
        $this->color = $color;
        $this->specie = $specie;
    }

    public function intro() {
        echo "Wow! Your Tamagotchi was born! Its name is {$this->name}, its color is {$this->color}, and its specie is {$this->specie} :D";
    }
}

$shark = new Shark("Shark", "White", "Hammer");
// $shark->intro();
?>