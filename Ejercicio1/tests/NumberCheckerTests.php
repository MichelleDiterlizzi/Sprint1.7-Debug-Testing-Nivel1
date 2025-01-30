<?php

use PHPUnit\Framework\TestCase;
require_once 'src/NumberChecker.php';

class NumberCheckerTests extends TestCase
{
    public function testIsEven(){

        $checker = new NumberChecker(10);
        $this->assertTrue($checker->isEven());
    }

    public function testIsNotEven(){
        $checker = new NumberChecker(5);
        $this->assertFalse($checker->isEven());
    }

    public function testIsPositive(){

        $checker = new NumberChecker(3);
        $this->assertTrue($checker->isPositive());
    }

    public function testIsNotPositive(){

        $checker = new NumberChecker(-2);
        $this->assertFalse($checker->isPositive());
    }

    public function testZeroIsNotPositive(){
        $checker = new NumberChecker(0);
        $this->assertFalse($checker->isPositive());
    }

    public function testZeroIsEven(){
        $checker = new NumberChecker(0);
        $this->assertTrue($checker->isEven());
    }
}