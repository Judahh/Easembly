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
class BasicPosition {

    private $stringValue;

    private function __construct($stringValue) {
        $this->stringValue = $stringValue;
    }

    public static function BasicPositionWithIntPositionCode($intPositionCode) {
        $stringValue;
        switch ($intPositionCode) {
            case 1:
                $stringValue = "right";
            break;

            case 2:
                $stringValue = "bottom";
            break;

            case 3:
                $stringValue = "top";
            break;

            case 4:
                $stringValue = "center";
            break;

            default:
                $stringValue = "left";
            break;
        }
        $instance = new self($stringValue); //arrumar
        return $instance;
    }

    public static function BasicPositionWithStringPositionValue($stringPositionValue) {
        $instance = new self($stringPositionValue); //arrumar
        return $instance;
    }

    public function stringBasicPosition() {
        return $this->stringValue;
    }

    public static function stringPositionTopValue() {
        return "top";
    }

    public static function stringPositionCenterValue() {
        return "center";
    }

    public static function stringPositionBottomValue() {
        return "bottom";
    }

    public static function stringPositionLeftValue() {
        return "left";
    }

    public static function stringPositionRightValue() {
        return "right";
    }

}
