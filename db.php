<?php
require './Models/Product.php';
require './Models/Accessories.php';
require './Models/Category.php';
require './Models/Food.php';
require './Models/Hygiene.php';
require './Models/PetsGame.php';


$dog = new Category('dogs', '<i class="fa-solid fa-dog"></i>');
$cat = new Category('cats', '<i class="fa-solid fa-cat"></i>');

$DogAccesories = new Accessories('Collare', $dog, '19.99€', 'img', 'Nylon', 'Taglia Grande');

$CatAccesories = new Accessories('Collare', $cat, '16.99€', 'img', 'Similpelle', 'Taglia Piccola');

$CatGame = new PetsGame('Cuccia Amaca per Calorifero', $cat, '14.49€', 'img', 'Peluche',  'Max 6 kg');

$DogGame = new PetsGame('Cuccia Outdoor', $dog, '48.89€', 'img', 'Legno', 'Taglia Piccola-Media');

$CatHygiene = new Hygiene('Salviette Disinfettanti', $cat, '8.00€', 'img', 'Pelo corto');
$DogHygiene = new Hygiene('Antiparassitario', $cat, '28.50€', 'img', 'Pelo Lungo');


$CatFood = new Food('Crocchette', $cat, '7.99€', 'img', '3-9 mesi', 'Salmone', '750 gr');
$DogFood = new Food('Crocchette', $dog, '9.99€', 'img', '9-14 mesi', 'Manzo', '1250 gr');


$ArrayProduct = [
    $DogAccesories,
    $CatAccesories,
    $CatGame,
    $DogGame,
    $CatHygiene,
    $DogHygiene,
    $CatFood,
    $DogFood

];

var_dump($ArrayProduct);
