<?php

require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Product.php";

class Game extends Product {

    protected $forma;
    protected $colore;

    public function set_modello($_forma){
        $this->forma = $_forma;
    }
    public function set_colore($_colore){
        $this->colore = $_colore;
    }
}
