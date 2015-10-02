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
class DeclarationBackgroundColor extends DeclarationBackground {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBackgroundColorWithBasicColor($basicColor) {
        $instance = new parent("background-color", $basicColor->stringBasicColor());
        return $instance;
    }
    
    public static function DeclarationBackgroundColorWithStringValue($stringValue) {
        $instance = new parent("background-color", $stringValue);
        return $instance;
    }

    public static function stringValueTransparent() {
        return "transparent";
    }
}

?>