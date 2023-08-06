<?php

namespace Category\Readonly;

class Category
{
    public function __construct(
        public readonly string $id,
        public readonly string $name
    ) {
    }
}

// $category = new Category('1', 'mizz');

// var_dump($category);

// $category->id = '1'; // error 