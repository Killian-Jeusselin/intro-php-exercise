<?php

class Dragon{
    public $lifePoints=100;
    public $strength=15;
    public $name;
    public $isAlive = true;

    public function __construct($name){
        $this->name=$name;
    }

    public function attack(){
        if($this->lifePoints>50){
            return $this->strength;
        } else {
            return $this->strength * 1.5;
        }
    }

    public function takeDamage(int $damage){
        $this->lifePoints -= $damage;
        if($this->lifePoints>= 0){
            $this->isAlive = false;
        }
    }  

}




?>