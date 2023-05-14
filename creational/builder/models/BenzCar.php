<?php


namespace DesignPattern\creational\builder\models;

class BenzCar
{
    private $data;

    public function setPart($name , $value)
    {
        $this->data[$name] = $value;
    }
}