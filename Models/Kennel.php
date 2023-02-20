<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product
{
    private $material;
    private $width;
    private $height;
    private $depth;

    public function __construct(string $_name, array $_categories, float $_price, string $_description, string $_material, float $_height, float $_width, float $_depth, string $_imgUrl = '')
    {
        parent::__construct($_name, $_categories, $_price, $_description, $_imgUrl);
        $this->setMaterial($_material);
        $this->setDimension('width', $_width);
        $this->setDimension('height', $_height);
        $this->setDimension('depth', $_depth);
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

    public function setDimension($dimension, $dimension_value)
    {
        if (!is_numeric($dimension_value) || !$dimension_value) return false;
        if ($dimension === 'width') {
            $this->width = $dimension_value;
        } elseif ($dimension === 'height') {
            $this->height = $dimension_value;
        } elseif ($dimension === 'depth') {
            $this->depth = $dimension_value;
        } else return false;
    }

    public function getDimension($dimension)
    {
        if ($dimension === 'width') {
            return $this->width;
        } elseif ($dimension === 'height') {
            return $this->height;
        } elseif ($dimension === 'depth') {
            return $this->depth;
        } else return false;
    }
}
