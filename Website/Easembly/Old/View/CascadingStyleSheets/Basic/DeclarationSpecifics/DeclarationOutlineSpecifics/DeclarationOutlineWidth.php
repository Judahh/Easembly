<?php

/**
 * DeclarationOutlineWidth [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationOutlineWidth extends DeclarationOutline{
//Constructor
//   instantiation: 
//      $declaration = DeclarationOutlineWidth::DeclarationOutlineWidthWithStringValue($stringValue);
    public static function DeclarationOutlineWidthWithStringValue($stringValue) {
        $instance = new parent("outline-width", $stringValue);
        return $instance;
    }
    
    public static function stringValueMedium() {
        return "medium";
    }
    
    public static function stringValueThin() {
        return "thin";
    }
    
    public static function stringValueThick() {
        return "thick";
    }
    
    public static function DeclarationOutlineWidthBasicLength($basicLength) {
        $instance = new parent("outline-width", $basicLength->stringBasicLength());
        return $instance;
    }
}

?>