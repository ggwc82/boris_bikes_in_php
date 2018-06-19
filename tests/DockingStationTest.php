<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/DockingStation.php";

class DockingStationTest extends TestCase
{   
    private $dockingstation;
    private $bike;

    public function setUp(){
        $this->dockingstation = new DockingStation();
        $this->bike = new Bike();
    }

    public function test_describe_docking_station()
    {
        $this->assertInstanceOf('DockingStation', $this->dockingstation);
    }

    public function test_has_method_release_bike()
    {
        $this->assertTrue(
            method_exists($this->dockingstation, 'release_bike'),
            'Class doesn\'t have a method release_bike'
        );
    }

    public function test_docking_station_release_bike_return_bike_instance()
    {   
        $released_bike = $this->dockingstation->release_bike();
        $this->assertInstanceOf('Bike', $released_bike);

    }

    public function test_released_bike_has_method_is_working()
    {   
        $released_bike = $this->dockingstation->release_bike();
        $this->assertTrue(
            method_exists($released_bike, 'is_working'),
            'Class doesn\'t have a method is_working'
        );
    }

    public function test_released_bike_has_method_is_working_and_is_true()
    {   
        $released_bike = $this->dockingstation->release_bike();
        $this->assertTrue($released_bike->is_working());
    }
}