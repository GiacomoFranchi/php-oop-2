<?php

require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Product.php";

class Cuccia extends Product {

    protected $modello;
    protected $dimensioni;
    protected $colore;

    public function set_modello($_modello){
        $this->modello = $_modello;
    }
    public function set_dimensioni($_dimensioni){
        $this->dimensioni = $_dimensioni;
    }
    public function set_colore($_colore){
        $this->colore = $_colore;
    }
}
