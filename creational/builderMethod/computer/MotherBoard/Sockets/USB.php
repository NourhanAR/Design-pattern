<?php
namespace DesignPattern\builderMethod\computer\MotherBoard\Sockets;




class USB
{
    private string $version;

    //work like a setter

    public function __construct(string $version)
    {
         $this->version = $version;
    }

    



    /**
     * Get the value of version
     */ 
    public function getVersion() : string
    {
        return $this->version;
    }
}
