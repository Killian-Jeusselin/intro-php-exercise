<?php

require_once('./src/Dragon.php');
require_once('./src/Knight.php');

class Fight {

    public function __construct(){
        $dragon = new Dragon('Mushu');
        $knight = new Knight('Arthur', 10);
    }
    
    public function fight(){
        
    }
}


?>