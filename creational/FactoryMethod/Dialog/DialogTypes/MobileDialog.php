<?php

namespace DesignPattern\creational\FactoryMethod\Dialog\DialogTypes;
use DesignPattern\creational\FactoryMethod\Dialog\Buttons\Button;
use DesignPattern\creational\FactoryMethod\Dialog\Buttons\UIButton;
use DesignPattern\creational\FactoryMethod\Dialog\DialogTypes\Dialog;


class SystemDialog extends Dialog 
{

 public function createButton() : Button
   {
    return new UIButton();
   }
}