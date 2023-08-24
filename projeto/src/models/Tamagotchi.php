<?php

declare(strict_types=1);

namespace Beatr\TamagotchiPhp\Models;

// Aqui ficam as propriedades/atributos e métodos :)
abstract class Tamagotchi
{
    // Constantes que mostram a etapa da vida do pet:
    const LIFE_CYCLE = [
        'unborn',
        'baby',
        'teenager',
        'adult',
        'old',
        'dead',
    ];

    // Propriedades/atributos de estilo:
    private static string $name;
    private static string $color;
    private static int $age;

    // Propriedades/atributos de necessidades biológicas:
    public string $happiness;
    public string $hungry;
    public string $bathroom;
    public string $sleep;
    public string $existencialCrise;

    public function __construct(
        string $name,
        string $color,
        int $age
    )
    {
        self::$name = $name;
        self::$color = $color;
        self::$age = $age;
    }

    // Métodos:
    public static function getLifeCycle(int $age):string
    {
        return self::LIFE_CYCLE[$age];
    }

    // Obrigando a implementar método em todas as classes que extenderem dessa classe abstrata:
    abstract public function getInformation():string;
}
?>