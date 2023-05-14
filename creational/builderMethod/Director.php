<?php
namespace DesignPattern\builderMethod;

use DesignPattern\builderMethod\Builder;
use DesignPattern\builderMethod\computer\Types\Computer;

class Director 
{
    private Builder $builder;


    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function chnageBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function makeComputer() : Computer
    {
       return $this->builder->getComputer();

    }
}