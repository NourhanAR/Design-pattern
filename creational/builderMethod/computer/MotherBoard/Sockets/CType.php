<?php
namespace DesignPattern\builderMethod\computer\MotherBoard\Sockets;




class CType
{
    private bool $withVideoTransfer;

    //work like a setter

    public function __construct(bool $withVideoTransfer)
    {
         $this->withVideoTransfer = $withVideoTransfer;
    }

    /**
     * Get the value of withVideoTransfer
     */ 
    public function getWithVideoTransfer() : bool
    {
        return $this->withVideoTransfer;
    }
}
