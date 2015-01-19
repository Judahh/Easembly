<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasicHexdecimalRange
 *
 * @author Judah
 */
class BasicHexdecimalRange {
    private $stringValue;

    private function __construct($stringValue) {
        $this->stringValue = $stringValue;
    }

    public static function BasicHexdecimalRangeWithIntHexdecimalValue($intHexdecimalValue) {
        $instance = new self($intHexdecimalValue); //arrumar
        return $instance;
    }

    public static function BasicHexdecimalRangeWithStringHexdecimalWildcardValue($stringHexdecimalWildcardValue) {
        $instance = new self($stringHexdecimalWildcardValue); //arrumar
        return $instance;
    }
    
    public static function BasicHexdecimalRangeWithIntHexdecimalStartValueWithIntHexdecimalEndValue($intHexdecimalStartValue, $intHexdecimalEndValue) {
        $instance = new self($intHexdecimalStartValue."-".$intHexdecimalEndValue); //arrumar
        return $instance;
    }
    
    public function stringBasicHexdecimalRange() {
        return $this->stringValue;
    }
}
