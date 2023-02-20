<?php

class Animal
{
    private $name;
    private $size;
    private $age;

    public function __construct(string $_name, string $_size = '', string $_age = '')
    {
        $this->setName($_name);
        $this->setSize($_size);
        $this->setAge($_age);
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

    public function getSize()
    {
        return $this->size;
    }

    public function setAge($age)
    {
        $allowed_ages = ['junior', 'adult', 'senior'];
        if (!in_array($age, $allowed_ages)) return false;
        $this->age = $age;
        return true;
    }

    public function getAge()
    {
        return $this->age;
    }
}
