<?php
namespace Tournament;

abstract class Duellant
{

    private $engadedparty;

    public function engage($engagedparty){
        $this->engadedparty = $engagedparty;
    }

}