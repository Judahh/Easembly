<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationAnimationNameValue
 *
 * @author Judah
 */
class BorderValue {

    private $arrayBorderValue;

    private function __construct() {
        
    }
    
    public static function BorderValueWithStringBorderWidthWithStringBorderStyleWithStringBorderColor($stringBorderWidth, $stringBorderStyle, $stringBorderColor) {
        $instance = new self();
        array_push($this->arrayBorderValue, $stringBorderWidth);
        array_push($this->arrayBorderValue, $stringBorderStyle);
        array_push($this->arrayBorderValue, $stringBorderColor);
        return $instance;
    }
    
    public static function BorderValueWithDeclarationBorderWidthWithDeclarationBorderStyleWithDeclarationBorderColor($declarationBorderWidth, $declarationBorderStyle, $declarationBorderColor) {
        $instance = new self();
        array_push($this->arrayBorderValue, $declarationBorderWidth->getStringValue());
        array_push($this->arrayBorderValue, $declarationBorderStyle->getStringValue());
        array_push($this->arrayBorderValue, $declarationBorderColor->getStringValue());
        return $instance;
    }

    public static function BorderValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayBorderValue() {
        return $this->arrayBorderValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayBorderValue, $stringValue);
    }

    public function addStringValueWithDeclarationBorderSpecific($declarationBorderSpecific) {
        array_push($this->arrayBorderValue, $declarationBorderSpecific->getStringValue());
    }
    
    public static function getArrayBorderNameValue() {
        return AnimationNameValue::getInstance()->getArrayBorderNameValue();
    }

}
