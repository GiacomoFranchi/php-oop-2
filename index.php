<?php

require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Cuccia.php';

$food1 = new Food('cane', 'dog.png');
$food1->set_type('Cibo per cani');
$food1->set_name('Purina-gnam');
$food1->set_price('17.587');
$food1->set_food_scad('2024-11-10');

$game1 = new Game ('cane', 'dog.png');
$game1->set_type('Giochi');
$game1->set_name('Palla Pazza');
$game1->set_price('7.50');
$game1->set_modello('PpRay');
$game1->set_colore('multicolor');

$cuccia1 = new Cuccia ('cane', 'dog.png');
$cuccia1->set_type('Cuccia');
$cuccia1->set_name('CasaCane');
$cuccia1->set_price('47.50');
$cuccia1->set_modello('Delux');
$cuccia1->set_dimensioni('300x200x150');
$cuccia1->set_colore('brown');
var_dump($food1, $game1, $cuccia1);
?>