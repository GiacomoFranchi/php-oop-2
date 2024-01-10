<?php

require_once __DIR__ . "/Category.php";
require_once __DIR__ . '/../Traits/Pricetot.php';

class Product extends Category {

    use Pricetot;

    protected $type;
    protected $name;
    protected $price;
    protected $poster;
    protected int $number;

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
    public function set_number($_number) {
        $this->number = $_number;
    }
    
/*GET */
    public function get_type(){
        return $this->type;
    }   
    public function get_price(){
        return $this->price;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_poster(){
        return $this->poster;
    }
    public function get_number(){
        return $this->number;
    }
}
