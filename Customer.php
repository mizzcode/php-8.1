<?php

namespace Customer\Enum;

interface sayHello
{
    function sayHello(): string;
}

trait inIndonesia
{
    function inIndonesia(): string
    {
        return match ($this) {
            Gender::Male => "Tuan",
            Gender::Female => "Nyonya",
        };
    }
}

enum Gender: string implements sayHello
{
    use inIndonesia;
    
    case Male = 'Mr.';
    case Female = 'Mrs.';

    const Unknown = 'Unknown';

    function sayHello(): string
    {
        return "Halo " . $this->value;
    }

    static function fromIndonesia(string $value): ?Gender
    {
        return match ($value) {
            "Tuan" => Gender::Male,
            "Nyonya" => Gender::Female,
            // default => throw new Exception('Tidak support di indon') // error
        };
    }
}

class Customer
{
    public function __construct(public string $name, public ?Gender $gender)
    {
    }
}

function sayHello(Customer $customer): string
{
    if ($customer->gender == null) {
        return "Halo " . $customer->name;
    } else {
        return "Halo " . $customer->gender->value . $customer->name;
    }
}

var_dump(sayHello(new Customer('Mizz', Gender::tryFrom('Mr.'))));
var_dump(sayHello(new Customer('Jani', Gender::tryFrom('Mrs.'))));
var_dump(sayHello(new Customer('Ferdi', Gender::tryFrom('salah'))));


var_dump(Gender::cases());

var_dump(Gender::Male->sayHello());
var_dump(Gender::Female->sayHello());

var_dump(Gender::Male->inIndonesia());
var_dump(Gender::Female->inIndonesia());

var_dump(Gender::fromIndonesia('Tuan'));
var_dump(Gender::fromIndonesia('Nyonya'));
// var_dump(Gender::fromIndonesia('Salah')); // error

var_dump(Gender::Unknown);