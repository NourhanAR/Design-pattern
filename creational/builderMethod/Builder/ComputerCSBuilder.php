<?php
namespace DesignPattern\builderMethod\Builder;

use DesignPattern\builderMethod\Builder;
use DesignPattern\builderMethod\computer\UPS;
use DesignPattern\builderMethod\computer\Mouse;
use DesignPattern\builderMethod\computer\Monitor;
use DesignPattern\builderMethod\computer\Keyboard;
use DesignPattern\builderMethod\computer\CoolingSystem;
use DesignPattern\builderMethod\computer\Types\Computer;
use DesignPattern\builderMethod\computer\Types\ComputerCS;
use DesignPattern\builderMethod\computer\MotherBoard\MotherBoard;
use DesignPattern\builderMethod\computer\MotherBoard\Sockets\USB;
use DesignPattern\builderMethod\computer\MotherBoard\MainParts\CPU;
use DesignPattern\builderMethod\computer\MotherBoard\MainParts\GPU;
use DesignPattern\builderMethod\computer\MotherBoard\MainParts\RAM;
use DesignPattern\builderMethod\computer\MotherBoard\Sockets\CType;
use DesignPattern\builderMethod\computer\MotherBoard\MainParts\Disk;
use DesignPattern\builderMethod\computer\MotherBoard\MainParts\Sockets;
use DesignPattern\builderMethod\computer\MotherBoard\MainParts\NetworkCard;

class ComputerCSBuilder extends Builder
{
    protected function buildMotherBoard(): MotherBoard
    {
       $cpu = new CPU(2.8);
       $ram = new RAM(16);
       $gpu = new GPU(2);
       $sockets = new Sockets(
        [
            new USB(2),
            new USB(3),
            new CType(true),
            new CType(true),
            new CType(true)
        ]
        );
        $networkCard = new NetworkCard(5);
        $disk = new Disk('ssd');
        return new MotherBoard(
            $cpu,$ram, $gpu, $sockets, $networkCard,  $disk
        );
    }

    protected function buildKeyboard() : Keyboard
    {
        return new Keyboard(true);
    
    }

    protected function buildMouse() : Mouse
    {
        return new Mouse(false);

    }
    protected function buildMonitor() : Monitor
    {
        return new Monitor('1920 FHD');
     
    }

    protected function buildCoolingSystem() :CoolingSystem
    {
        return new CoolingSystem(5);

    }

    protected function buildUps() : UPS
    {
        return new UPS(96);

    }

    public function getComputer() : Computer
    {
        $computer = new ComputerCS();
        $computer->setMotherBoard($this->buildMotherBoard());
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMouse($this->buildMouse());
        $computer->setMonitor($this->buildMonitor());
        $computer->setCS($this->buildCoolingSystem());

        return $computer;


    }

}
