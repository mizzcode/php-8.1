<?php

namespace Product\NewInInitializer;

use Category\Readonly\Category;

require_once __DIR__ . "/Category.php";

class Product {
    function __construct(public string $name = 'Mizz', public Category $category = new Category('1', 'Foll'))
    {
        
    }    
}

var_dump(new Product());