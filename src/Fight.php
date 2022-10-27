<?php
require_once 'Dragon.php';
require_once 'Knight.php';

class Fight
{
    public $dragon;
    public $knight;

    public function __construct()
    {
        $this->dragon = new Dragon('Mushu');
        $this->knight = new Knight('Arthur', 10);
    }

    public function fight()
    {
        while ($this->dragon->isAlive == true && $this->knight->isAlive == true){
            $this->knight->attack();
            $this->dragon->takeDamage($this->knight->strength);
            $this->knight->takeDamage($this->dragon->attack());
        }

        if ($this->knight->isAlive) {
            print $this->dragon->name . ' est tombé au combat';
        } else {
            print $this->knight->name . ' est tombé au combat';
        }

    }
}