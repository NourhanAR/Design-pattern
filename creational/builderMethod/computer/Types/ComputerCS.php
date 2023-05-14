<?php
namespace DesignPattern\builderMethod\computer\Types;


use DesignPattern\builderMethod\computer\CoolingSystem;
use DesignPattern\builderMethod\computer\Types\Computer;
use DesignPattern\builderMethod\computer\Types\ICoolingSystem;

class ComputerCS extends Computer implements ICoolingSystem
{

    private CoolingSystem $CS;
 

     public function turnOn() : bool
    {
        return true;
    }
     public function turnOff() : bool
    {
        return true;
    }

    public function coolDown(int $temp) : bool
    {
        return true;
    }


    /**
     * Set the value of CS
     *
     * @return  self
     */ 
    public function setCS($CS)
    {
        $this->CS = $CS;

        return $this;
    }
}