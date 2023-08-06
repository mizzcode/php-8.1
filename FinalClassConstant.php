<?php

namespace FinalClassConstant;

class Foo {
    final const XX = "Foo";
}
class Bar extends Foo {
    // const XX = "Bar"; // jika parent const nya final maka tidak bisa di ovverding atau di ubah value nya
}

var_dump(Bar::XX);