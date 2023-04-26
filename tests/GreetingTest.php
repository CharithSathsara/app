<?php

use PHPUnit\Framework\TestCase;
include_once 'Greeting.php';

class GreetingTest extends TestCase{

    public function testGetGreeting(){

        $greeting = new Greeting();

        $this->assertEquals('Hello, John!', $greeting->getGreeting('Charith'));
        $this->assertEquals('Hello, Jane!', $greeting->getGreeting('Jane'));
    }
}

