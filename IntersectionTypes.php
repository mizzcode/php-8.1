<?php

namespace IntersectionTypes;

interface HasBrand
{
    function getBrand(): string;
}

interface HasName
{
    function getName(): string;
}

class Car implements HasBrand, HasName
{
    private string $brand;
    private string $name;

    public function __construct(string $brand, $name)
    {
        $this->brand = $brand;
        $this->name = $name;
    }

    function getBrand(): string
    {
        return $this->brand;
    }

    function getName(): string
    {
        return $this->name;
    }
}

function printBrandAndName(HasBrand & HasName $value)
{
    echo $value->getBrand() . "-" . $value->getName() . PHP_EOL;
}

printBrandAndName(new Car('Honda', 'Mobilio'));
printBrandAndName(new Car('Toyota', 'Avanza'));