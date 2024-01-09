<?php

class Category{

    protected $animal;
    protected $icon;

    public function __construct($_animal, $_icon) {
        $this->animal = $_animal;
        $this->icon = $_icon;
    }
}