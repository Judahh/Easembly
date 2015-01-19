<?php

/**
 * DeclarationOutlineStyle [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationOutlineStyle extends DeclarationOutline{
//Constructor
//   instantiation: 
//      $declaration = DeclarationOutlineStyle::DeclarationOutlineStyleWithStringValue($stringValue);
    public static function DeclarationOutlineStyleWithStringValue($stringValue) {
        $instance = new parent("outline-style", $stringValue);
        return $instance;
    }
    
    public static function stringValueNone() {
        return "none";
    }
    
    public static function stringValueHidden() {
        return "hidden";
    }
    
    public static function stringValueDotted() {
        return "dotted";
    }

    public static function stringValueDashed() {
        return "dashed";
    }
    
     public static function stringValueSolid() {
        return "solid";
    }
    
    public static function stringValueDouble() {
        return "double";
    }
    
    public static function stringValueGroove() {
        return "groove";
    }

    public static function stringValueRidge() {
        return "ridge";
    }
    
    public static function stringValueInset() {
        return "inset";
    }

    public static function stringValueOutset() {
        return "outset";
    }
}

?>