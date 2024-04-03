<?php
require './Models/Product.php';
require './Models/Accessories.php';
require './Models/Category.php';
require './Models/Food.php';
require './Models/Hygiene.php';
require './Models/PetsGame.php';


$dog = new Category('dogs', '<i class="fa-solid fa-dog"></i>');
$cat = new Category('cats', '<i class="fa-solid fa-cat"></i>');

$DogAccesories = new Accessories('Collare', '19.99€', $dog, 'https://picsum.photos/200/200', 'Nylon', 'Taglia Grande');

$CatAccesories = new Accessories('Collare Elastico', '16.99€', $cat, 'https://picsum.photos/200/200', 'Similpelle', 'Taglia Piccola');

$CatGame = new PetsGame('Cuccia Amaca per Calorifero', '14.49€', $cat, 'https://picsum.photos/200/200', 'Peluche',  'Max 6 kg');

$DogGame = new PetsGame('Cuccia Outdoor', '48.89€', $dog, 'https://picsum.photos/200/200', 'Legno', 'Taglia Piccola-Media');

$CatHygiene = new Hygiene('Salviette Disinfettanti', '8.00€', $cat, 'https://picsum.photos/200/200', 'Pelo corto');
$DogHygiene = new Hygiene('Antiparassitario', '28.50€', $dog, 'https://picsum.photos/200/200', 'Pelo Lungo');


$CatFood = new Food('Crocchette', '7.99€', $cat, 'https://picsum.photos/200/200', '3-9 mesi', 'Salmone', '750 gr');
$DogFood = new Food('Carne Secca', '9.99€', $dog, 'https://picsum.photos/200/200', '9-14 mesi', 'Manzo', '450 gr');


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

// var_dump($ArrayProduct);
