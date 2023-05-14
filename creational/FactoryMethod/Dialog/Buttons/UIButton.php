<?php

namespace DesignPattern\creational\FactoryMethod\Dialog\Buttons;

use DesignPattern\creational\FactoryMethod\Dialog\Buttons\Button;


class UIButton extends Button
{
  
     public function show() :string
     {
        return '<UIButton props ="{click me}"></UIButton>';
     }
     public function click() : void
     {
      
     }
}
