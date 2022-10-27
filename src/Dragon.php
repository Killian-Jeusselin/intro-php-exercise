<?php

class Dragon  {

    public $name;
    public $lifePoints = 100;
    public $strength = 15;
    public $isAlive = true;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function attack(){
        if($this->lifePoints < 50){
            $answer = $this->strength * 1.5;
        }
        return $this->strength;
    }

    public function takeDamage(int $damage){
        $this->lifePoints - $damage;

        if($this->lifePoints <= 0){
            $this->isAlive = false;
        }
    }
}