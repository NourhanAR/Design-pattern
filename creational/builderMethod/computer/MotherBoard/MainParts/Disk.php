<?php
namespace DesignPattern\builderMethod\computer\MotherBoard\MainParts;



class Disk 
{
    private string $type;

    //work like a setter

    public function __construct(string $type)
    {
         $this->type = $type;
    }

    

    


    /**
     * Get the value of type
     */ 
    public function getType() : string
    {
        return $this->type;
    }
}