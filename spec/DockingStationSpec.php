<?php

namespace spec;

use DockingStation;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DockingStationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DockingStation::class);
    }

    function it_should_release_a_bike()
    {   
        $this->releaseBike()->shouldReturnAnInstanceOf('Bike');
    }

    function it_should_dock_a_bike()
    {
        $bike = new \Bike();
        $this->dock($bike)->shouldReturnAnInstanceOf('Bike');
    }

    function it_should_return_a_docked_bike_instance()
    {   
        $bike = new \Bike();
        $this->dock($bike);
        $this->bike()->shouldReturn($bike);
    }
}
