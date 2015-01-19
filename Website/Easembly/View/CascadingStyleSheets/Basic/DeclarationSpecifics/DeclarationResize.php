<?php

/**
 * DeclarationResize [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationResize extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationResize::DeclarationResizeWithStringValue($stringValue);   
    public static function DeclarationResizeWithStringValue($stringValue) {
        $instance = new parent("resize", $stringValue);
        return $instance;
    }
    
    public static function stringValueNone() {
        return "none";
    }

    public static function stringValueBoth() {
        return "both";
    }
    
    public static function stringValueHorizontal() {
        return "horizontal";
    }
    
    public static function stringValueVertical() {
        return "vertical";
    }
}

?>