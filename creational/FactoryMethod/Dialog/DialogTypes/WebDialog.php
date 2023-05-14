<?php

namespace DesignPattern\creational\FactoryMethod\Dialog\DialogTypes;
use DesignPattern\creational\FactoryMethod\Dialog\Buttons\Button;
use DesignPattern\creational\FactoryMethod\Dialog\Buttons\WebButton;
use DesignPattern\creational\FactoryMethod\Dialog\DialogTypes\Dialog;

class WebDialog extends Dialog 
{

 public function createButton() : Button
   {
    return new WebButton();
   }
}
