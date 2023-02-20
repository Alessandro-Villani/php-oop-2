<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    private $type;
    private $ingredients;
    private $weight;

    public function __construct(string $_name, array $_categories, float $_price, string $_description, string $_type, array $_ingredients, int $_weight, string $_imgUrl)
    {
        parent::__construct($_name, $_categories, $_price, $_description, $_imgUrl);
        $this->setType($_type);
        $this->setIngredients($_ingredients);
        $this->setWeight($_weight);
    }

    public function setType($type)
    {
        if ($type !== 'secco' && $type !== 'umido') return false;
        $this->type = $type;
        return true;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setIngredients($ingredients)
    {
        $ingredientsStore = [];
        foreach ($ingredients as $ingredient) {
            if (!is_numeric($ingredient) && $ingredient) {
                $ingredientsStore[] = $ingredient;
            }
        }
        $this->ingredients = $ingredientsStore;
        return true;
    }

    public function getIngredients()
    {
        return implode(', ', $this->ingredients);
    }

    public function setWeight($weight)
    {
        if (!is_numeric($weight)) return false;
        $this->weight = $weight;
        return true;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
