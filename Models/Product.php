<?php
class Product
{
    public $name;
    public $price;
    public $category;
    public $productImg;


    public function __construct($_name, $_price, $_category, $_productImg)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->productImg = $_productImg;
    }
}
