<?php

namespace App;

class Example{
    private $name;
    protected $foo;
    
    function __construct(Foo $foo){
        $this->name = "beeeps";
        $this->foo = $foo;
    }

    function getName(){
        return $this->name;
    }
}
