<?php

class Knight
{

    public $lifePoints = 100;
    public $strength = 10;
    public $name;
    public $weaponStrength;
    public $isAlive = true;


    public function __construct($name, $weaponStrength)
    {
        $this->name = $name;
        $this->weaponStrength = $weaponStrength;
    }

    public function attack()
    {
        $this->strength = $this->weaponStrength + rand(1, $this->strength);
    }

    public function takeDamage($damage)
    {
        $this->lifePoints = $this->lifePoints - $damage;

        if ($this->lifePoints <= 0) {
            $this->isAlive = false;
        }
    }
}