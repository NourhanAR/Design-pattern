<?php
namespace DesignPattern\builderMethod\computer;



class UPS
{
    private int $duration;



    public function __construct(float $duration)
    {
        $this->duration = $duration;
    }


   

    

    /**
     * Get the value of duration
     */ 
    public function getDuration()
    {
        return $this->duration;
    }
}
