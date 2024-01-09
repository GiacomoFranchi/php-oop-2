<?php

require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';

$food1 = new Food('cane', 'dog.png');
echo $food1->set_type('Crocchette');
echo $food1->set_name('Purina-gnam');
echo $food1->set_price('17.80');
echo $food1->set_food_scad('11-11-2024');
var_dump($food1);
?>