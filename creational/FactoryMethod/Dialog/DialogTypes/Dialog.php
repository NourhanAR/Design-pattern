<?php

namespace DesignPattern\creational\FactoryMethod\Dialog\DialogTypes;

use DesignPattern\creational\FactoryMethod\Dialog\Buttons\Button;



abstract class Dialog
{
   abstract public function createButton(): Button;

   public function renderDialog() :string
   {
      $button = $this->createButton();

      return "
      #####################
      {$button->show()}
      #####################
      
      ";
   }
}

