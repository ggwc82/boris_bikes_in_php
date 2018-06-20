<?php

class DockingStation
{   
    private $bike;

    public function releaseBike()
    {
        return new Bike();
    }

    public function dock($bike)
    {   
        $this->bike = $bike;
        return $this->bike;
    }

    public function bike()
    {
        return $this->bike;
    }
}