<?php
namespace DesignPattern\builderMethod\computer\MotherBoard\MainParts;



class RAM
{
    private int $size;

    //work like a setter

    public function __construct(int $size)
    {
         $this->size = $size;
    }

    

    /**
     * Get the value of size
     */ 
    public function getSize() : int
    {
        return $this->size;
    }
}
