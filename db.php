<?php
require './Models/Accessories.php';
require './Models/Category.php';
require './Models/Food.php';
require './Models/Hygiene.php';
require './Models/PetsGame.php';
require './Models/Product.php';


$dog = new Category('dogs', '<i class="fa-solid fa-dog"></i>');
$cat = new Category('cats', '<i class="fa-solid fa-cat"></i>');
