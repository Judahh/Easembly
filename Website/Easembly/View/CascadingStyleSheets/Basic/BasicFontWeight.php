<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasicFontWeight
 *
 * @author Judah
 */
class BasicFontWeight {

    private $stringValue;

    private function __construct($stringValue) {
        $this->stringValue = $stringValue;
    }

    public static function BasicFontWeightWithIntFontWeightCode($intFontWeightCode) {
        $stringValue;
        switch ($intFontWeightCode) {
            case 2:
                $stringValue = "200";
            break;

            case 3:
                $stringValue = "300";
            break;

            case 4:
                $stringValue = "400";
            break;

            case 5:
                $stringValue = "500";
            break;

            case 6:
                $stringValue = "600";
            break;

            case 7:
                $stringValue = "700";
            break;
        
            case 8:
                $stringValue = "800";
            break;

            case 9:
                $stringValue = "900";
            break;
        
            default:
                $stringValue = "100";
            break;
        }
        $instance = new self($stringValue);
        return $instance;
    }

    public function stringBasicFontWeight() {
        return $this->stringValue;
    }
}
