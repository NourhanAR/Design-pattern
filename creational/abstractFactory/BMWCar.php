<?php
namespace DesignPattern\creational\abstractFactory;

use DesignPattern\creational\abstractFactory\CarInterface;


class BMWCar implements CarInterface
{
    private $price;


    public function __construct($price)
{
    $this->price = $price;
}
   public function calculatePrice(){

    return $this->price + 120000;

   }
}
