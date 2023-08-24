<?php

declare(strict_types=1);

namespace Beatr\TamagotchiPhp\Models;

class Shark extends Tamagotchi {

    private static string $specie;

    public function __construct(
        string $name,
        string $color,
        int $age,
        string $specie,
    )
    {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
        self::$specie = $specie;
    }

    public function getInformation():string
    {
        return "Here's your Tamagotchi data:\n".
                "Life cycle: ".
                Tamagotchi::getLifeCycle($this->age)."\n".
                "Name: ".$this->name."\n".
                "Color: ".$this->color."\n".
                "Specie: ".self::$specie;
    }
}
?>