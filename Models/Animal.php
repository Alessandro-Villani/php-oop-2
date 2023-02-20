<?php

class Animal
{
    private $name;
    private $size;

    public function __construct(string $_name, string $_size)
    {
        $this->setName($_name);
        $this->setSize($_size);
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

    public function setSize($size)
    {
        $allowed_sizes = ['piccola', 'media', 'grande', 'gigante'];
        if (!in_array($size, $allowed_sizes)) return false;
        $this->size = $size;
        return true;
    }
}
