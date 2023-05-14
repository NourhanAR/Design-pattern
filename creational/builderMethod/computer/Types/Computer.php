<?php
namespace DesignPattern\builderMethod\computer\Types;

use DesignPattern\builderMethod\computer\Mouse;
use DesignPattern\builderMethod\computer\Monitor;
use DesignPattern\builderMethod\computer\Keyboard;
use DesignPattern\builderMethod\computer\MotherBoard\MotherBoard;

 abstract class Computer
{
    protected MotherBoard $motherBoard;
    protected Keyboard $keyboard;
    protected Mouse $mouse;
    protected Monitor $monitor;

    abstract public function turnOn() : bool;
    abstract public function turnOff() : bool;

    public function dashboard() : string
    {
        return ' ';
    }




    /**
     * Set the value of motherBoard
     *
     * @return  self
     */ 
    public function setMotherBoard($motherBoard)
    {
        $this->motherBoard = $motherBoard;

        return $this;
    }

    /**
     * Set the value of keyboard
     *
     * @return  self
     */ 
    public function setKeyboard($keyboard)
    {
        $this->keyboard = $keyboard;

        return $this;
    }

    /**
     * Set the value of mouse
     *
     * @return  self
     */ 
    public function setMouse($mouse)
    {
        $this->mouse = $mouse;

        return $this;
    }

    /**
     * Set the value of monitor
     *
     * @return  self
     */ 
    public function setMonitor($monitor)
    {
        $this->monitor = $monitor;

        return $this;
    }
}