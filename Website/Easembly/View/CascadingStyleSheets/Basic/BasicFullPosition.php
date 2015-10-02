<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasicPosition
 *
 * @author Judah
 */
class BasicFullPosition {

    private $stringValue;

    private function __construct($stringValue) {
        $this->stringValue = $stringValue;
    }

    public static function BasicFullPositionWithBasicPosition($basicPosition) {
        $instance = new self($basicPosition->stringBasicPosition()); //arrumar
        return $instance;
    }
    
    public static function BasicFullPositionWithBasicLength($basicLength) {
        $instance = new self($basicLength->stringBasicLength()); //arrumar
        return $instance;
    }

    public function stringBasicFullPosition() {
        return $this->stringValue;
    }
}
