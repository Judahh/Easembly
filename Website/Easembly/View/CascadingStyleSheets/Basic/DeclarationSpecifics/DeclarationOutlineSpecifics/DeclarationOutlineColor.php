<?php

/**
 * DeclarationOutlineColor [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationOutlineColor extends DeclarationOutline{
//Constructor
//   instantiation: 
//      $declaration = DeclarationOutline::DeclarationOutlineWithStringValue($stringValue);
    public static function DeclarationOutlineWidthWithStringValue($stringValue) {
        $instance = new parent("outline-color", $stringValue);
        return $instance;
    }
    
    public static function stringValueInvert() {
        return "invert";
    }
    
    public static function DeclarationOutlineColorWithBasicColor($basicColor) {
        $instance = new parent("outline-color", $basicColor->stringBasicColor());
        return $instance;
    }
    
}

?>