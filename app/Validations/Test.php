<?php

namespace App\Validations;

class Test
{
    private string $name;
    protected int $price;
    protected int $weight;

    public function __construct (string $name, int $price, int $weight){
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
