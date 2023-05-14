<?php
namespace DesignPattern\builderMethod\computer\MotherBoard\MainParts;


//processor 

class CPU
{
    private float $speed;

    //work like a setter

    public function __construct(float $speed)
    {
         $this->speed = $speed;
    }

    
//getter 
    /**
     * Get the value of speed
     */ 
    public function getSpeed() : float
    {
        return $this->speed;
    }
}
