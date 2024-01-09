<?php

require_once __DIR__ . "/Category.php";

class Product extends Category {
    protected $type;
    protected $name;
    protected $price;

    public function set_type($_type){
        return $this->type = $_type;
    }
    public function set_price($_price){
        return $this->price = $_price;
    }
    public function set_name($_name){
        return $this->name = $_name;
    }
}
