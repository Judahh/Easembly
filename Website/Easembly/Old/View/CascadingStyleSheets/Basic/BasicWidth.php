<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasicWidth
 *
 * @author Judah
 */
class BasicWidth {

    private $stringBasicWidth;

    private function __construct($stringBasicWidth) {
        $this->stringBasicWidth = $stringBasicWidth;
    }

    public static function BasicWidthWithBasicLength($basicLength) {
        $instance = new self($basicLength->stringBasicLength());
        return $instance;
    }
    
    public static function BasicWidthWithIntPositionCode($intPositionCode) {
        $stringValue;
        switch ($intPositionCode) {
            case 1:
                $stringValue = "thin";
            break;

            case 2:
                $stringValue = "thick";
            break;

            default:
                $stringValue = "medium";
            break;
        }
        $instance = new self($stringValue); //arrumar
        return $instance;
    }

    public static function BasicWidthWithStringWidthValue($stringWidthValue) {
        $instance = new self($stringWidthValue); //arrumar
        return $instance;
    }

    public function stringBasicWidth() {
        return $this->stringBasicWidth;
    }
    
    public static function stringValueMedium() {
        return "medium";
    }
    
    public static function stringValueThin() {
        return "thin";
    }
    
    public static function stringValueThick() {
        return "thick";
    }
}
