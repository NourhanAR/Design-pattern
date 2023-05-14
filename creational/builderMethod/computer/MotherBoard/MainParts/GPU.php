<?php
namespace DesignPattern\builderMethod\computer\MotherBoard\MainParts;


//Graphics card 

class GPU
{
    private float $speed;

    //work like a setter

    public function __construct(float $speed)
    {
         $this->speed = $speed;
    }

    

    /**
     * Get the value of speed
     */ 
    public function getSpeed() : float
    {
        return $this->speed;
    }
}
