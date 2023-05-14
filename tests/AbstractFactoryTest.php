<?php

use DesignPattern\creational\abstractFactory\BenzCar;
use PHPUnit\Framework\TestCase;
use DesignPattern\creational\abstractFactory\BMWCar;
use DesignPattern\creational\abstractFactory\CarAbstractFactory;


class AbstractFactoryTest extends TestCase
{
 
      public function testCanCreateBMWCar()
    {
       $carFactory = new CarAbstractFactory(10000);
       $bmw = $carFactory->createBMWCar();

       $this->assertInstanceOf(BMWCar::class,$bmw);
    }

    public function testCanCreateBenzCar()
    {
       $carFactory = new CarAbstractFactory(200000);
       $benz = $carFactory->createBenzCar();

       $this->assertInstanceOf(BenzCar::class,$benz);
    }

}