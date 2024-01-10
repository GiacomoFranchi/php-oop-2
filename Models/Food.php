<?php

require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Product.php";

class Food extends Product {

    protected $food_scad;
/*SET */
    public function set_food_scad($_food_scad){    
        $this->food_scad = $_food_scad ;
    }

    public function get_food_scad(){    
        return $this->food_scad ;
    }

    public function ceck_food_scad($_food_scad){
        if(date('Y-m-d') < $_food_scad){
        $this->food_scad = $_food_scad;
        } else{
            throw new Exception('scaduto');
        }
    }
}
