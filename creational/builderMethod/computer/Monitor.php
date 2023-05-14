<?php
namespace DesignPattern\builderMethod\computer;



class Monitor
{
    private string $resolution;



    public function __construct(string $resolution)
    {
        $this->resolution = $resolution;
    }


   

    /**
     * Get the value of resolution
     */ 
    public function getResolution() :string
    {
        return $this->resolution;
    }
}
