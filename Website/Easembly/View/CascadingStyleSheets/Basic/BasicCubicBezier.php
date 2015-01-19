<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CubicBezier
 *
 * @author Judah
 */
class BasicCubicBezier {

    private $stringValue;

    private function __construct($stringValue) {
        $this->stringValue = $stringValue;
    }

    public static function BasicCubicBezierWithFloatStartXValueWithFloatStartYValueWithFloatEndXValueWithFloatEndYValue($floatStartXValue, $floatStartYValue, $floatEndXValue, $floatEndYValue) {
        $instance = new self("cubic-bezier(" . $floatStartXValue . "," . $floatStartYValue . "," . $floatEndXValue . "," . $floatEndYValue . ")"); //arrumar
        return $instance;
    }

    public function stringBasicCubicBezier() {
        return $this->stringValue;
    }

}
