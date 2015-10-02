<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ColumnRuleValue
 *
 * @author Silvio
 */
class ColumnRuleValue {

    private $arrayColumnRuleValue;

    private function __construct() {
        
    }

    public static function
    ColumnRuleWithStringWidthWithStringStyleWithStringColor
    ($stringWidth, $stringStyle, $stringColor) {
        $instance = new self();
        array_push($this->arrayColumnRuleValue, $stringWidth);
        array_push($this->arrayColumnRuleValue, $stringStyle);
        array_push($this->arrayColumnRuleValue, $stringColor);
        return $instance;
    }
    
    public static function
    ColumnRuleWithDeclarationColumnRuleWidthWithDeclarationColumnRuleStyleWithDeclarationColumnRuleColor
    ($declarationColumnRuleWidth, $declarationColumnRuleStyle, $declarationColumnRuleColor) {
        $instance = new self();
        array_push($this->arrayColumnRuleValue, $declarationColumnRuleWidth->getStringValue());
        array_push($this->arrayColumnRuleValue, $declarationColumnRuleStyle->getStringValue());
        array_push($this->arrayColumnRuleValue, $declarationColumnRuleColor->getStringValue());
        return $instance;
    }

    public static function ColumnRuleValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayColumnRuleValue() {
        return $this->arrayColumnRuleValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayColumnRuleValue, $stringValue);
    }
    
    public function addStringValueWithDeclarationColumnRuleSpecific($declarationColumnRuleSpecific) {
        array_push($this->arrayColumnRuleValue, $declarationColumnRuleSpecific->getStringValue());
    }

    public static function getArrayColumnRuleNameValue() {
        return ColumnRuleNameValue::getInstance()->getArrayColumnRuleNameValue();
    }
}
