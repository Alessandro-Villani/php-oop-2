<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    private $material;

    public function __construct(string $_name, array $_categories, float $_price, string $_description, string $_material, string $_imgUrl = '')
    {
        parent::__construct($_name, $_categories, $_price, $_description, $_imgUrl);
        $this->setMaterial($_material);
    }

    public function setMaterial($material)
    {
        if (is_numeric($material) || !$material) return false;
        $this->material = $material;
        return true;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}
