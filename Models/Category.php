<?php

class Category{

    protected $animal;
    protected $icon;

    public function __construct($_animal, $_icon) {
        $this->animal = $_animal;
        $this->icon = $_icon;
    }

    public function setIcon($_icon){
        $this->icon = $_icon;
    }
    public function getIcon(){
       return $this->icon;
    }

    public function setAnimal($_animal){
        $this->animal = $_animal;
    }
    public function getAnimal(){
        return $this->animal; 
    }
}