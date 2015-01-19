<?php

/**
 * DeclarationOverflow [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationOverflow extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationOverflow::DeclarationOverflowWithStringValue($stringValue);
    public static function DeclarationOverflowWithStringValue($stringValue) {
        $instance = new parent("overflow", $stringValue);
        return $instance;
    }
    
    public static function stringValueVisible() {
        return "visible";
    }
    
    public static function stringValueHidden() {
        return "hidden";
    }
    
    public static function stringValueScroll() {
        return "scroll";
    }

    public static function stringValueAuto() {
        return "auto";
    }
    
}

?>