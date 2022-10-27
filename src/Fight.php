<?php

require_once("Dragon.php");
require_once("Knight.php");

class Fight  {

    public $dragon;
    public $knight;

    public function __construct(){
        $this->dragon = new Dragon("Mushu");
        $this->knight = new Knight("Arthur", 10);
    }

    public function fight(){
        $T_fighters = [$this->knight, $this->dragon];

        while ($this->knight->isAlive == true || $this->dragon->isAlive == true) {
            foreach ($T_fighters as $fighter) {
                $fighter->attack();
                $fighter->takeDamage(rand(0, 10));
                var_dump($fighter);
                if($fighter->isAlive == false){
                    return $fighter->name . " est tombé au combat";
                }
            }
        }
    }
}