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
class BorderLeftValue {

    private $arrayBorderLeftValue;

    private function __construct() {
        
    }

    public static function BorderLeftValueWithDeclarationBorderLeftWidthWithDeclarationBorderLeftStyleWithDeclarationBorderLeftColor($declarationBorderLeftWidth, $declarationBorderLeftStyle, $declarationBorderLeftColor) {
        $instance = new self();
        array_push($this->arrayBorderLeftValue, $declarationBorderLeftWidth->getStringValue());
        array_push($this->arrayBorderLeftValue, $declarationBorderLeftStyle->getStringValue());
        array_push($this->arrayBorderLeftValue, $declarationBorderLeftColor->getStringValue());
        return $instance;
    }
    
    public static function
    BorderLeftValueWithStringBorderLeftWidthWithStringBorderLeftStyleWithStringBorderLeftColor
    ($stringBorderLeftWidth, $stringBorderLeftStyle, $stringBorderLeftColor) {
        $instance = new self();
        array_push($this->arrayBorderLeftValue, $stringBorderLeftWidth);
        array_push($this->arrayBorderLeftValue, $stringBorderLeftStyle);
        array_push($this->arrayBorderLeftValue, $stringBorderLeftColor);
        return $instance;
    }

    public static function BorderLeftValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayBorderLeftValue() {
        return $this->arrayBorderLeftValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayBorderLeftValue, $stringValue);
    }

    public function addStringValueWithDeclarationBorderLeftSpecific($declarationBorderLeftSpecific) {
        array_push($this->arrayBorderValue, $declarationBorderLeftSpecific->getStringValue());
    }
    
    public static function getArrayBorderLeftNameValue() {
        return AnimationNameValue::getInstance()->getArrayBorderLeftNameValue();
    }
}
