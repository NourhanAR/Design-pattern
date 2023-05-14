<?php

namespace DesignPattern\creational\FactoryMethod\Dialog\DialogTypes;
use DesignPattern\creational\FactoryMethod\Dialog\Buttons\Button;
use DesignPattern\creational\FactoryMethod\Dialog\DialogTypes\Dialog;
use DesignPattern\creational\FactoryMethod\Dialog\Buttons\SystemButton;

class SystemDialog extends Dialog 
{

 public function createButton() : Button
   {
    return new SystemButton();
   }
}