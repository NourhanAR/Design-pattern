<?php
namespace DesignPattern\builderMethod\computer\Types;

use DesignPattern\builderMethod\computer\UPS;
use DesignPattern\builderMethod\computer\Types\IPower;
use DesignPattern\builderMethod\computer\CoolingSystem;
use DesignPattern\builderMethod\computer\Types\Computer;
use DesignPattern\builderMethod\computer\Types\ICoolingSystem;

class ComputerXL extends Computer implements ICoolingSystem, IPower
{

    private CoolingSystem $CS;
    private UPS $ups;

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

    public function BackupPower() : bool
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

    /**
     * Set the value of ups
     *
     * @return  self
     */ 
    public function setUps($ups)
    {
        $this->ups = $ups;

        return $this;
    }
}