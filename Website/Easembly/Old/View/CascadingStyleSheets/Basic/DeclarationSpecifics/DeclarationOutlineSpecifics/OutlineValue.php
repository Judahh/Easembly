<?php

/**
 * OutlineValue [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class OutlineValue {
    private $arrayOutlineValue;

    private function __construct() {
        
    }

    public static function
    OutlineValueWithstringOutlineColorWithStringOutlineStyleWithStringOutlineWidth
    ($stringOutlineColor, $stringOutlineStyle, $stringOutlineWidth) {
        $instance = new self();
        array_push($this->arrayOutlineValue, $stringOutlineColor);
        array_push($this->arrayOutlineValue, $stringOutlineStyle);
        array_push($this->arrayOutlineValue, $stringOutlineWidth);
        return $instance;
    }
    
    public static function
    OutlineValueWithDeclarationOutlineColorWithDeclarationOutlineStyleWithDeclarationOutlineWidth
    ($declarationOutlineColor, $declarationOutlineStyle, $declarationOutlineWidth) {
        $instance = new self();
        
        array_push($this->arrayOutlineValue, $declarationOutlineColor->getStringValue());
        array_push($this->arrayOutlineValue, $declarationOutlineStyle->getStringValue());
        array_push($this->arrayOutlineValue, $declarationOutlineWidth->getStringValue());
        
        return $instance;
    }

    public static function OutlineValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayOutlineValue() {
        return $this->arrayOutlineValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayOutlineValue, $stringValue);
    }
    
    public function addStringValueWithDeclarationOutlineSpecific($declarationOutlineSpecific) {
        array_push($this->arrayOutlineValue, $declarationOutlineSpecific->getStringValue());
    }

    public static function getArrayOutlineNameValue() {
        return OutlineNameValue::getInstance()->getArrayOutlineNameValue();
    }
    
}
?>