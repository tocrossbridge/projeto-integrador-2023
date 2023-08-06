<?php
class Tamagotchi{

    public string $name;
    public string $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_name(){ return $this->name; }
    function get_color(){ return $this->color; }
    
    public function get_info(){ return $this->color; }
}
?>