<?php

require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Product.php";

class Cuccia extends Product {

    protected $modello;
    protected $dimensioni;
    protected $colore;
/*SET */
    public function set_modello($_modello){
        $this->modello = $_modello;
    }
    public function set_dimensioni($_dimensioni){
        $this->dimensioni = $_dimensioni;
    }
    public function set_colore($_colore){
        $this->colore = $_colore;
    }
/*GET */
    public function get_modello(){
        return $this->modello ;
    }
    public function get_dimensioni(){
        return $this->dimensioni;
    }
    public function get_colore(){
        return $this->colore;
    }
}
