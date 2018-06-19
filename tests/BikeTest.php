<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/Bike.php";

class BikeTest extends TestCase
{
    private $bike;

    public function setUp(){
        $this->bike = new Bike();
    }

    public function test_has_method_is_working() {
        $this->assertTrue(
            method_exists($this->bike, 'is_working'),
            "Class doesn't have a is_working method"
        );
    }
}