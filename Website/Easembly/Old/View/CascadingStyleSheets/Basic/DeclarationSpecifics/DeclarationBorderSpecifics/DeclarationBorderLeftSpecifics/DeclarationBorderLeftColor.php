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
class DeclarationBorderLeftColor extends DeclarationBorderLeft {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderLeftColorWithBasicColor($basicColor) {
        $instance = new parent("border-left-color", $basicColor->stringBasicColor());
        return $instance;
    }
    
    public static function DeclarationBorderLeftColorWithStringValue($stringValue) {
        $instance = new parent("border-left-color", $stringValue);
        return $instance;
    }

    public static function stringValueTransparent() {
        return "transparent";
    }
}

?>