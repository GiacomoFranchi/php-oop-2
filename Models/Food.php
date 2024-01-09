<?php

require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Product.php";

class Food extends Product {

    protected $food_scad;

    public function set_food_scad($_food_scad){
        return $this->food_scad = $_food_scad;
    }
}
