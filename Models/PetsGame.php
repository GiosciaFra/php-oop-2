<?php

class PetsGame extends Product
{
    public $materials;
    public $age;

    function __construct($_name, $_price, $_category, $_productImg, $_materials, $_age)
    {

        parent::__construct($_name, $_price, $_category, $_productImg);
        $this->materials = $_materials;
        $this->age = $_age;
    }
}
