<?php

require_once __DIR__ . "/Category.php";

class Product extends Category {
    protected $type;
    protected $name;
    protected $price;
    protected $poster;
/*SET */
    public function set_type($_type){
        $this->type = $_type;
    }
    public function set_poster($_poster){
        $this->poster = $_poster;
    }
    public function set_price($_price){
        if($_price > 0){
            $_price = number_format($_price, 2);
            $this->price = $_price;
        }
    }
    public function set_name($_name){
        $this->name = $_name;
    }
/*GET */
    public function get_type($_type){
        return $this->type = $_type;
    }
    public function get_price($_price){
        return $this->price = number_format($_price, 2);
    }
    public function get_name($_name){
        return $this->name = $_name;
    }
    public function get_poster($_poster){
        $this->poster = $_poster;
    }
}
