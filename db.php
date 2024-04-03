<?php
require './Models/Accessories.php';
require './Models/Category.php';
require './Models/Food.php';
require './Models/Hygiene.php';
require './Models/PetsGame.php';
require './Models/Product.php';


$dog = new Category('dogs', '<i class="fa-solid fa-dog"></i>');
$cat = new Category('cats', '<i class="fa-solid fa-cat"></i>');

$Accesories1 = new Accessories('Collare', $dog, '19.99€', 'img', 'Nylon', 'Taglia Grande');

$Accesories2 = new Accessories('Collare', $cat, '16.99€', 'img', 'Similpelle', 'Taglia Piccola');
