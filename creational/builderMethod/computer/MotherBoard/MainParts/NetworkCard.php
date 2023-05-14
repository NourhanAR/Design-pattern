<?php
namespace DesignPattern\builderMethod\computer\MotherBoard\MainParts;



class NetworkCard 
{

    private int $category;


public function __construct(int $category)
    {
         $this->category = $category;
    }

    

   



    /**
     * Get the value of category
     */ 
    public function getCategory() : int
    {
        return $this->category;
    }
}