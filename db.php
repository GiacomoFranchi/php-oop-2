<?php

require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Cuccia.php';
require_once __DIR__ . '/Traits/Pricetot.php';


$catalogo= [
$food1 = new Food('cane', 'fa-solid fa-dog'),

$game1 = new Game ('cane', 'fa-solid fa-dog'),

$cuccia1 = new Cuccia ('cane', 'fa-solid fa-dog'),

$food2 = new Food('gatto', 'fa-solid fa-cat'),

$game2 = new Game ('gatto', 'fa-solid fa-cat'),

$cuccia2 = new Cuccia ('gatto', 'fa-solid fa-cat'),
];


$food1->set_poster('/img/img_negozio.jpg');
$food1->setAnimal('cane');
$food1->set_type('Cibo per cani');
$food1->set_name('Purina-gnam');
$food1->set_price('17.587');
$food1->set_number('13');
$food1->set_food_scad('2023-11-10');
$food1->setPricetot();

$game1->set_poster('/img/img_negozio.jpg');
$game1->set_type('Giochi');
$game1->set_name('Palla Pazza');
$game1->set_price('7.50');
$game1->set_forma('PpRay');
$game1->set_colore('multicolor');
$game1->set_number('3');
$game1->setPricetot();

$cuccia1->set_poster('/img/img_negozio.jpg');
$cuccia1->set_type('Cuccia');
$cuccia1->set_name('CasaCane');
$cuccia1->set_price('47.50');
$cuccia1->set_modello('Delux');
$cuccia1->set_dimensioni('300x200x150');
$cuccia1->set_colore('brown');
$cuccia1->set_number('17');
$cuccia1->setPricetot();

$food2->set_poster('/img/img_negozio.jpg');
$food2->set_type('Cibo per gatti');
$food2->set_name('Purina-miaomiao');
$food2->set_price('12.587');
$food2->set_food_scad('2024-10-10');
$food2->set_number('30');
$food2->setPricetot();

$game2->set_poster('/img/img_negozio.jpg');
$game2->set_type('Giochi');
$game2->set_name('topolino');
$game2->set_price('3.50');
$game2->set_forma('topo di fogna');
$game2->set_colore('marrone');
$game2->set_number('130');
$game2->setPricetot();

$cuccia2->set_poster('/img/img_negozio.jpg');
$cuccia2->set_type('Cuccia');
$cuccia2->set_name('CasaGatto');
$cuccia2->set_price('37.50');
$cuccia2->set_modello('cheap');
$cuccia2->set_dimensioni('300x200x150');
$cuccia2->set_colore('red');
$cuccia2->set_number('8');
$cuccia2->setPricetot();
var_dump($catalogo);

try{
    $result = $food1->ceck_food_scad(2024-11-10);
        echo "Prodotto consumabile";
    } catch (Exception $e){
        echo 'Prodotto scaduto';
    }
?>