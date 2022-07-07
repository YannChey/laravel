<?php

namespace App\Validations;

class TestChild extends Test
{
    public string $color;

    public function __construct(string $name, int $price, int $weight, string $color)
    {
        parent::__construct($name, $price, $weight);
        $this->color = $color;
    }

    function getColor()
    {
        return $this->color;
    }

    function setColor(string $color)
    {
        $this->color = $color;
    }
}

