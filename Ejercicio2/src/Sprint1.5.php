<?php

abstract class Animal {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    abstract public function makeSound();
    abstract public function __toString();
}

class Gato extends Animal{

    public function makeSound(){
        $sound = "Miaao!";
        return $sound;
    }

    public function __toString(){
        $noise = "El verso de ". $this->name. " es " . $this->makeSound();
        return $noise;
    }

}

class Perro extends Animal{

    public function makeSound(){
        $sound = "Woof woof!";
        return $sound;
    }
    public function __toString(){
        $noise = "El verso de ". $this->name. " es " . $this->makeSound();
        return $noise;
    }
}

?>