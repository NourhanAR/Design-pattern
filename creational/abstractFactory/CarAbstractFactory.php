<?php

namespace DesignPattern\creational\abstractFactory;

use DesignPattern\creational\abstractFactory\BMWCar;
use DesignPattern\creational\abstractFactory\BenzCar;

class CarAbstractFactory
{
    private $tax = 10000;
    private $price;



    public function __construct($price)
    {
        $this->price = $price;
    }
    public function createBMWCar() : BMWCar
    {
        return new BMWCar($this->price);
    }
    public function createBenzCar() : BenzCar
    {
        return new BenzCar($this->price, $this->tax);
    }
}
