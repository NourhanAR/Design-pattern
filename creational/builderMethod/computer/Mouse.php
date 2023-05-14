<?php
namespace DesignPattern\builderMethod\computer;



class Mouse
{
    private bool $withExtraUtilities;



    public function __construct(bool $withExtraUtilities)
    {
        $this->withExtraUtilities = $withExtraUtilities;
    }


    /**
     * Get the value of withExtraUtilities
     */ 
    public function getWithExtraUtilities()
    {
        return $this->withExtraUtilities;
    }
}
