<?php

class Category
{
    public $type;
    public $icon;

    function __construct($_type, $_icon)
    {
        $this->type = $_type;
        $this->icon = $_icon;
    }
}
