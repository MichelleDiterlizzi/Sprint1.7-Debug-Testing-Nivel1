<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/grau.php';

class GrauTests extends TestCase
{
    public function testNota61(){
        $this->assertEquals("Primera división",grau(61));
    }

    public function testNota60(){
        $this->assertEquals("Segunda división", grau(60));
    }

    public function testNota45(){
        $this->assertEquals("Segunda división", grau(45));
    }

    public function testNota44(){
        $this->assertEquals("Tercera división", grau(44));
    }

    public function testNota33(){
        $this->assertEquals("Tercera división", grau(33));
    }

    public function testNota32(){
        $this->assertEquals("El estudiante tiene que reprovar", grau(32));
    }

    public function testNota0(){
        $this->assertEquals("El estudiante tiene que reprovar", grau(0));
    }
    
    public function testString(){
        $this->assertEquals(null, grau("texto"));
    }
}

?>