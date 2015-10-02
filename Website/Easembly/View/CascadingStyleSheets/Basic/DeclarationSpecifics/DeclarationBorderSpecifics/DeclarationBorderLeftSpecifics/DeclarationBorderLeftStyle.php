<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColor
 *
 * @author Judah
 */
class DeclarationBorderLeftStyle extends DeclarationBorderLeft {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderLeftStyleWithStringValue($stringValue) {
        $instance = new parent("border-left-style", $stringValue); //arrumar
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