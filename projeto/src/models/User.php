<?php

namespace Beatr\TamagotchiPhp\Models;

class User
{
    // Propriedades/Atributos:
    public string $username;
    private string $email;
    private string $birthday;

    public function __construct(
        string $username,
        string $email,
        string $birthday
    )
    {
        $this->username = $username;
        $this->email = $email;
        $this->birthday = $birthday;
    }

    // Métodos:
    // - Entre os parênteses está a tipagem e o nome da variável esperada
    // - Colocamos como 'void' porque a função não retorna nada
//     public function setUsername(string $username):void{
//         $this->username = $username;
//     }
// 
//     public function setEmail(string $email):void{
//         $this->email = $email;
//     }
// 
//     public function setBirthday(string $birthday):void{
//         $this->birthday = $birthday;
//     }


    // Método para obter informações com tipagem em string:
    public function getInformation():string
    {
        return $this->username." - ".$this->email." - ".$this->birthday;
    }
}