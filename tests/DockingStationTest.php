<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/DockingStation.php";

class DockingStationTest extends TestCase
{
    public function test_describe_docking_station()
    {
        $dockingstation = new DockingStation();
        $this->assertInstanceOf('DockingStation', $dockingstation);
    }
}