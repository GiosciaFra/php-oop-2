<?php
class Hygiene extends Product
{
    public $typeOfHair;

    function __construct($_name, $_price, $_category, $_productImg, $_typeOfHair)
    {

        parent::__construct($_name, $_price, $_category, $_productImg);
        $this->typeOfHair = $_typeOfHair;
    }
}
