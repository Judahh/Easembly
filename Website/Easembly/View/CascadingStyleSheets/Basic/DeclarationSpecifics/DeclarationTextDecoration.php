<?php

/**
 * DecorationTextDecoration [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTextDecoration extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTextDecoration::DeclarationTextDecorationWithStringValue($stringValue);
    public static function DeclarationTextDecorationWithStringValue($stringValue) {
        $instance = new parent("text-decoration", $stringValue);
        return $instance;
    }

    public static function stringValueNone() {
        return "none";
    }

    public static function stringValueUnderline() {
        return "underline";
    }
    
    public static function stringValueOverline() {
        return "overline";
    }
    
    public static function stringValueLineThrough() {
        return "line-through";
    }
}

?>