<?php

require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Cuccia.php';


$products= [
$food1 = new Food('cane', 'dog.png'),

$game1 = new Game ('cane', 'dog.png'),

$cuccia1 = new Cuccia ('cane', 'dog.png'),

$food2 = new Food('gatto', 'cat.png'),

$game2 = new Game ('gatto', 'cat.png'),

$cuccia2 = new Cuccia ('gatto', 'cat.png'),
];
$food1->set_poster('https://www.legambiente.it/wp-content/uploads/2022/12/animali-in-citta-report.jpg');
$food1->set_type('Cibo per cani');
$food1->set_name('Purina-gnam');
$food1->set_price('17.587');
$food1->set_food_scad('2024-11-10');

$game1->set_poster('https://www.legambiente.it/wp-content/uploads/2022/12/animali-in-citta-report.jpg');
$game1->set_type('Giochi');
$game1->set_name('Palla Pazza');
$game1->set_price('7.50');
$game1->set_modello('PpRay');
$game1->set_colore('multicolor');

$cuccia1->set_poster('https://www.legambiente.it/wp-content/uploads/2022/12/animali-in-citta-report.jpg');
$cuccia1->set_type('Cuccia');
$cuccia1->set_name('CasaCane');
$cuccia1->set_price('47.50');
$cuccia1->set_modello('Delux');
$cuccia1->set_dimensioni('300x200x150');
$cuccia1->set_colore('brown');

$food2->set_poster('https://www.legambiente.it/wp-content/uploads/2022/12/animali-in-citta-report.jpg');
$food2->set_type('Cibo per gatti');
$food2->set_name('Purina-miaomiao');
$food2->set_price('12.587');
$food2->set_food_scad('2024-10-10');

$game2->set_poster('https://www.legambiente.it/wp-content/uploads/2022/22/animali-in-citta-report.jpg');
$game2->set_type('Giochi');
$game2->set_name('topolino');
$game2->set_price('3.50');
$game2->set_modello('topo di fogna');
$game2->set_colore('marrone');

$cuccia2->set_poster('https://www.legambiente.it/wp-content/uploads/2022/22/animali-in-citta-report.jpg');
$cuccia2->set_type('Cuccia');
$cuccia2->set_name('CasaGatto');
$cuccia2->set_price('37.50');
$cuccia2->set_modello('cheap');
$cuccia2->set_dimensioni('300x200x150');
$cuccia2->set_colore('red');
var_dump($products)
?>