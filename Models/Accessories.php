<?php


class Accessories extends Product
{
    public $materials;
    public $size;

    function __construct($_name, $_price, $_category, $_productImg, $_materials, $_size)
    {

        parent::__construct($_name, $_price, $_category, $_productImg);
        $this->materials = $_materials;
        $this->size = $_size;
    }
}
