<?php

class Knight{
    public $lifePoints=100;
    public $strength=10;
    public $name;
    public $isAlive = true;
    public $weaponStrength;

    public function __construct($name, $weaponStrength){
        $this->name=$name;
        $this->weaponStrength=$weaponStrength;
    }

    public function attack(){
       return $this->weaponStrength + rand(1, $strength);
    }

    public function takeDamage(int $damage){
        $this->lifePoints -= $damage;
        if($this->lifePoints>= 0){
            $this->isAlive = false;
        }
    }  

}




?>