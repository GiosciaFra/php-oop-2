<?php

require_once  './Models/Traits/HasMatAge.php';

class PetsGame extends Product
{
    use HasMaterials;
    use HasAge;

    function __construct($_name, $_price, $_category, $_productImg, $_materials, $_age)
    {

        parent::__construct($_name, $_price, $_category, $_productImg);
        $this->materials = $_materials;
        $this->age = $_age;
    }
}
