<?php

require_once __DIR__ . 'Animal.php';

class Product
{
    private $name;
    private $categories;
    private $price;
    private $description;

    public function __construct(string $_name, array $_categories, float $_price, string $_description)
    {
        $this->setName($_name);
        $this->setCategories($_categories);
        $this->setPrice($_price);
        $this->setDescription($_description);
    }

    public function setName($name)
    {
        if (is_numeric($name) || !$name) return false;
        $this->name = $name;
        return true;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCategories($categories)
    {
        $categoriesStore = [];
        foreach ($categories as $category) {
            if ($category instanceof Animal) {
                $categoriesStore[] = $category;
            }
        }
        $this->$categories = $categoriesStore;
    }

    public function getCategories()
    {
        $categories = array_map(fn ($category) => $category->name, $this->categories);
        return implode(', ', $categories);
    }

    public function setPrice($price)
    {
        if (!is_numeric($price) || !$price) return false;
        $this->price = number_format($price, 2);
        return true;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setDescription($description)
    {
        if (is_numeric($description) || !$description) return false;
        $this->description = $description;
        return true;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
