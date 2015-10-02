<?php

/**
 * DeclarationMarginTop [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationMarginTop extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationMarginTop::DeclarationMarginTopWithStringValue($stringValue);
    public static function DeclarationMarginTopWithStringValue($stringValue) {
        $instance = new parent("margin-top", $stringValue);
        return $instance;
    }
    
    public static function DeclarationMarginLeftWithBasicLength($basicLength) {
        $instance = new parent("margin-top", $basicLength->stringBasicLength());
        return $instance;
    }
    
    public static function stringValueAuto() {
        return "auto";
    }
}

?>