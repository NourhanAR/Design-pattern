<?php
namespace DesignPattern\builderMethod\computer\Types;


interface ICoolingSystem 
{
    public function coolDown(int $temp) : bool;

}