<?php

namespace DesignPattern\creational\FactoryMethod\Dialog\Buttons;

use DesignPattern\creational\FactoryMethod\Dialog\Buttons\Button;


class WebButton extends Button
{
  
     public function show() :string
     {
        return " <div><button>Click me</button></div>";
     }
     public function click() : void
     {
      
     }
}
