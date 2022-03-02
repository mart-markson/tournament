<?php
namespace Tournament;

class Swordsman extends \Tournament\Duellant
{

    private $hitpoints = 0;
    private $equipment = [];

    function __construct($name = null){

    }

    public function hitPoints(){
        return $this->hitpoints;
    }

    public function equip($equipment) : self {
        $this->equipment[] = $equipment;
        return $this;
    }



}
