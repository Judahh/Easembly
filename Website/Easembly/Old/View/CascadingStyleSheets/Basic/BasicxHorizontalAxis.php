<?php

/**
 * BasicxHorizontalAxis [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicxHorizontalAxis {
    private $stringValue;

    private function __construct($stringValue) {
        $this->stringValue = $stringValue;
    }

    public static function BasicHorizontalAxisWithIntPositionCode($intHorizontalAxisCode) {
        $stringValue;
        switch ($intHorizontalAxisCode) {
            case 1:
                $stringValue = "right";
            break;

            case 2:
                $stringValue = "center";
            break;

            default:
                $stringValue = "left";
            break;
        }
        $instance = new self($stringValue);
        return $instance;
    }

    public static function BasicHorizontalAxisWithStringPositionValue($stringHorizontalAxisValue) {
        $instance = new self($stringHorizontalAxisValue);
        return $instance;
    }

    public function stringBasicHorizontalAxis() {
        return $this->stringValue;
    }

    public static function stringHorizontalAxisLefValue() {
        return "left";
    }

    public static function stringHorizontalAxisCenterValue() {
        return "center";
    }

    public static function stringHorizontalAxisRightValue() {
        return "right";
    }
    
    public static function BasicHorizontalAxisWithBasicLength($basicLength) {
        $instance = new parent("x-axis", $basicLength->stringBasicLength());
        return $instance;
    }
}

?>