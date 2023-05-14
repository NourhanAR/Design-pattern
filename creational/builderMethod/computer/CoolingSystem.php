<?php
namespace DesignPattern\builderMethod\computer;



class CoolingSystem
{
    private int $lowTemplimit;

    public function __construct(int $lowTemplimit)
    {
        $this->lowTemplimit = $lowTemplimit;
    }

    /**
     * Get the value of lowTemplimit
     */
    public function getLowTemplimit(): int
    {
        return $this->lowTemplimit;
    }
}
