<?php

namespace spec;

use Bike;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BikeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Bike::class);
    }
    
    function it_should_be_working()
    {
        $this->shouldBeWorking();
    }
}
