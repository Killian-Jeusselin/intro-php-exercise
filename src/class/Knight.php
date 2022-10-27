<?php

class Knight {
    public $weaponStrength;
    public $lifePoints;
    public $strength;
    public $name;

    public function __construct($weaponStrength, $lifePoints, $strength, $name)
    {
        $this->weaponStrength = $weaponStrength;
        $this->lifePoints = $lifePoints;
        $this->strength = $strength;
        $this->name = $name;
    }
}