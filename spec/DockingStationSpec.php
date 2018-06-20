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
        $this->release_bike()->shouldReturnAnInstanceOf('Bike');
    }
}
