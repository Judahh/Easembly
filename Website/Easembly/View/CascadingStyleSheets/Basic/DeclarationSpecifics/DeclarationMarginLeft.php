<?php

/**
 * DeclarationMarginLeft [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationMarginLeft extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationMarginLeft::DeclarationMarginLeftWithStringValue($stringValue);
    public static function DeclarationMarginLeftWithStringValue($stringValue) {
        $instance = new parent("margin-left", $stringValue);
        return $instance;
    }
    
    public static function DeclarationMarginLeftWithBasicLength($basicLength) {
        $instance = new parent("margin-left", $basicLength->stringBasicLength());
        return $instance;
    }
    
    public static function stringValueAuto() {
        return "auto";
    }
}

?>