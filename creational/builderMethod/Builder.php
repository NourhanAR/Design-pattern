<?php
namespace DesignPattern\builderMethod;

use DesignPattern\builderMethod\computer\UPS;
use DesignPattern\builderMethod\computer\Mouse;
use DesignPattern\builderMethod\computer\Monitor;
use DesignPattern\builderMethod\computer\Keyboard;
use DesignPattern\builderMethod\computer\CoolingSystem;
use DesignPattern\builderMethod\computer\Types\Computer;
use DesignPattern\builderMethod\computer\MotherBoard\MotherBoard;

abstract class Builder
{

    protected Computer $computer;


    abstract protected function buildMotherBoard(): MotherBoard;
    abstract protected function buildKeyboard() : Keyboard;
    abstract protected function buildMouse() : Mouse;
    abstract protected function buildMonitor() : Monitor;
    abstract protected function buildCoolingSystem() :CoolingSystem;
    abstract protected function buildUps() : UPS;
    abstract public function getComputer() :Computer;
}