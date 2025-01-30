<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Sprint1.5.php';

class AnimalTests extends TestCase
{
    public function testVersoGato(){

        $gato = new Gato('Charlie');
        $this->assertEquals("Miaao!", $gato->makeSound());
    }

    public function testVersoPerro(){
        $perro = new Perro("Bruno");
        $this->assertEquals("Woof woof!", $perro->makeSound());
    }

    public function testToStringGato(){
        $gato = new Gato("Charlie");
        $this->assertEquals("El verso de Charlie es Miaao!", $gato);
    }

    public function testToStringPerro(){
        $perro = new Perro("Bruno");
        $this->assertEquals("El verso de Bruno es Woof woof!", $perro);
    }
}