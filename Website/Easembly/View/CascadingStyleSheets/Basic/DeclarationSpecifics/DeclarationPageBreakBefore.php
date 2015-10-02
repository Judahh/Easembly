<?php

/**
 * DeclarationPageBreakBefore [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationPageBreakBefore extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationPageBreakBefore::DeclarationPageBreakBeforeWithStringValue($stringValue);
    public static function DeclarationPageBreakBeforeWithStringValue($stringValue) {
        $instance = new parent("page-break-before", $stringValue);
        return $instance;
    }
    
    public static function stringValueAuto() {
        return "auto";
    }
    
    public static function stringValueAlways() {
        return "always";
    }
    
    public static function stringValueAvoid() {
        return "avoid";
    }

    public static function stringValueLeft() {
        return "left";
    }
    public static function stringValueRight() {
        return "right";
    }
}

?>