<?php

namespace DesignPattern\creational\builder;

// the way of making a car 
interface carBuilderInterface
{
    public function createCar();
    public function addEngine();
    public function addDoors();
    public function addBody();
    public function addwheel();
    public function getCar();

}