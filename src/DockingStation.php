<?php

class DockingStation
{
    public function releaseBike()
    {
        return new Bike();
    }

    public function dock($bike)
    {
        return $bike;
    }
}