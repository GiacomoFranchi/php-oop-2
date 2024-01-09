<?php

require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Product.php";

class Game extends Product {

    protected $forma;
    protected $colore;
/*SET */
    public function set_modello($_forma){
        $this->forma = $_forma;
    }
    public function set_colore($_colore){
        $this->colore = $_colore;
    }
/*GET */
    public function get_modello($_forma){
        return $this->forma = $_forma;
    }
    public function get_colore($_colore){
        return $this->colore = $_colore;
    }
}
