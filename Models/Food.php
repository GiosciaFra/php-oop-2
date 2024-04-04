<?php
require_once  './Models/Traits/HasMatAge.php';

class Food extends Product
{
    use HasAge;
    public $ingredients;
    public $weight;


    function __construct($_name, $_price, $_category, $_productImg, $_age, $_ingredients, $_weight)
    {

        parent::__construct($_name, $_price, $_category, $_productImg);
        $this->age = $_age;
        $this->ingredients = $_ingredients;
        $this->weight = $_weight;
    }
}
