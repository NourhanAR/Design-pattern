<?php

namespace DesignPattern\creational\FactoryMethod\Dialog\Buttons;

use DesignPattern\creational\FactoryMethod\Dialog\Buttons\Button;


class SystemButton extends Button
{
  
     public function show() :string
     {
        return " click me ";
     }
     public function click() : void
     {
      
     }
}
