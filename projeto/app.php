<?php

// Para carregar libs de terceiros:
require_once __DIR__."./vendor/autoload.php";

// Importando o Tamagotchi:
use Beatr\TamagotchiPhp\Models\Tamagotchi;
use Beatr\TamagotchiPhp\Models\User;
use Beatr\TamagotchiPhp\Models\Shark;

// Inicializando o user:
$user = new User(
    'Aoba',
    'test@gmail.com',
    '03/01/2003'
);

// Inicializando o pet:
$pet = new Shark(
    'Tutu',
    'Branco',
    1,
    'Martelo'
);

// Mostrando o user e o pet:
var_dump($user->getInformation());
var_dump($pet->getInformation());

// Para executar este arquivo, digite `php app.php` no terminal