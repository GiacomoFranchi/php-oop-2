<?php

require_once __DIR__ . "/Category.php";

class Product extends Category {
    protected $type;
    protected $name;
    protected $price;

    public function set_type($_type){
        $this->type = $_type;
    }
    public function set_price($_price){
        if($_price > 0){
        $_price = number_format($_price, 2);
        return $this->price = $_price;
        }
    }
    public function set_name($_name){
        $this->name = $_name;
    }
}
