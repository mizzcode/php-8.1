<?php

namespace Person\FirstClassCallabeSyntax;

class Person {
    function __construct(public string $name)
    {
        
    }

    function sayHello(string $name): string {
        return "Halo $name, my name is $this->name";
    } 

    
}

$person = new Person('Mizz');

$refference = $person->sayHello(...);

var_dump($refference('Eko'));