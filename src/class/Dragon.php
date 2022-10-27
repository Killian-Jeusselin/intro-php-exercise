<?php

class Dragon {
    public $lifePoints;
    public $strength;
    public $name;

    public function __construct($lifePoints, $strength, $name)
    {
        $this->lifePoints = $lifePoints;
        $this->strength = $strength;
        $this->name = $name;
    }

    public function attack($strength, $lifePoints) {
        $strength = 15;
        $lifePoints = 100;
        if ($lifePoints > 50) {
            echo $strength;
        } else {
            echo $strength * 1.5;
        }
    }


}