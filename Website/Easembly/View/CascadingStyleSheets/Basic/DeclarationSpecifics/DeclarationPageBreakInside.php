<?php

/**
 * DeclarationPageBreakInside [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationPageBreakInside extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationPageBreakInside::DeclarationPageBreakInsideWithStringValue($stringValue);
    public static function DeclarationPageBreakInsidetWithStringValue($stringValue) {
        $instance = new parent("page-break-inside", $stringValue);
        return $instance;
    }
    
    public static function stringValueAuto() {
        return "auto";
    }
    
    public static function stringValueAvoid() {
        return "avoid";
    }
}

?>