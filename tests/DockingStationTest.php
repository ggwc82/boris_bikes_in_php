<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/DockingStation.php";

class DockingStationTest extends TestCase
{   
    private $dockingstation;

    public function setUp(){
        $this->dockingstation = new DockingStation();
    }

    public function test_describe_docking_station()
    {
        $this->assertInstanceOf('DockingStation', $this->dockingstation);
    }

    public function test_has_method_release_bike()
    {
        $this->assertTrue(
            method_exists($this->dockingstation, 'release_bike'),
            'Class doesn not have a method release_bike'
        );
    }
}