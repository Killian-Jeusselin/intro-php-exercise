<?php

class Knight  {

    public $name;
    public $lifePoints = 100;
    public $strength = 10;
    public $weaponStrength;
    public $isAlive = true;

    public function __construct(string $name, int $weaponStrength){
        $this->name = $name;
        $this->weaponStrength = $weaponStrength;
    }

    public function attack(){
        return $this->weaponStrength + rand(1, $this->strength);
    }

    public function takeDamage(int $damage){
        $this->lifePoints - $damage;

        if($this->lifePoints <= 0){
            $this->isAlive = false;
        }
    }
}