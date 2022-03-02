<?php
namespace Tournament;


class Highlander extends \Tournament\Duellant
{
    private $hitpoints = 0;
    private $equipment = [];

    function __construct($name = null){

    }

    public function hitPoints(){
        return $this->hitpoints;
    }

}