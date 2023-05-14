<?php
namespace DesignPattern\builderMethod\computer\MotherBoard\MainParts;




class Sockets
{
    private array $sockets;

    //work like a setter

    public function __construct(array $sockets)
    {
         $this->sockets = $sockets;
    }

    

    /**
     * Get the value of sockets
     */ 
    public function getSockets() : array
    {
        return $this->sockets;
    }
}
