<?php

/**
 * DeclarationPosition [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationPosition extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationPosition::DeclarationPositionWithStringValue($stringValue);
    public static function DeclarationPositionWithStringValue($stringValue) {
        $instance = new parent("position", $stringValue);
        return $instance;
    }
    
    public static function stringValueStatic() {
        return "static";
    }

    public static function stringValueAbsolute() {
        return "absolute";
    }
    
    public static function stringValueFixed() {
        return "fixed";
    }
    
    public static function stringValueRelative() {
        return "relative";
    }
    
}

?>