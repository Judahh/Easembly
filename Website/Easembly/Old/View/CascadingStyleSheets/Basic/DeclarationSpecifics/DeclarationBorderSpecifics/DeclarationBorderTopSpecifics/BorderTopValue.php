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
class BorderTopValue {

    private $arrayBorderTopValue;

    private function __construct() {
        
    }

    public static function BorderTopValueWithDeclarationBorderTopWidthWithDeclarationBorderTopStyleWithDeclarationBorderTopColor($declarationBorderTopWidth, $declarationBorderTopStyle, $declarationBorderTopColor) {
        $instance = new self();
        array_push($this->arrayBorderTopValue, $declarationBorderTopWidth->getStringValue());
        array_push($this->arrayBorderTopValue, $declarationBorderTopStyle->getStringValue());
        array_push($this->arrayBorderTopValue, $declarationBorderTopColor->getStringValue());
        return $instance;
    }
    
    public static function BorderTopValueWithStringBorderTopWidthWithStringBorderTopStyleWithStringBorderTopColor($stringBorderTopWidth, $stringBorderTopStyle, $stringBorderTopColor) {
        $instance = new self();
        array_push($this->arrayBorderTopValue, $stringBorderTopWidth);
        array_push($this->arrayBorderTopValue, $stringBorderTopStyle);
        array_push($this->arrayBorderTopValue, $stringBorderTopColor);
        return $instance;
    }

    public static function BorderTopValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayBorderTopValue() {
        return $this->arrayBorderTopValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayBorderTopValue, $stringValue);
    }
    
    public function addStringValueWithDeclarationBorderTopSpecific($declarationBorderTopSpecific) {
        array_push($this->arrayBorderValue, $declarationBorderTopSpecific->getStringValue());
    }

    public static function getArrayBorderTopNameValue() {
        return AnimationNameValue::getInstance()->getArrayBorderTopNameValue();
    }
}
