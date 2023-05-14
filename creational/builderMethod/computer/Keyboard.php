<?php
namespace DesignPattern\builderMethod\computer;



class Keyboard
{
    private bool $utfSupport;



    public function __construct(bool $utfSupport)
    {
        $this->utfSupport = $utfSupport;
    }


   

   

    /**
     * Get the value of utfSupport
     */ 
    public function getUtfSupport()
    {
        return $this->utfSupport;
    }
}
