<?php
require __DIR__.'../vendor/autoload.php';

use DesignPattern\builderMethod\Builder\ComputerCSBuilder;
use DesignPattern\builderMethod\Director;
use DesignPattern\creational\FactoryMethod\Dialog\DialogTypes\SystemDialog;



// $systemDialog = new SystemDialog();
// $systemDialog->renderDialog();




$director = new Director(new ComputerCSBuilder());
$computer = $director->makeComputer();
print_r($computer);
