<?php


namespace DesignPattern\creational\builder\models;

class BMWCar
{
    private $data;

    public function setPart($name , $value)
    {
        $this->data[$name] = $value;
    }
}