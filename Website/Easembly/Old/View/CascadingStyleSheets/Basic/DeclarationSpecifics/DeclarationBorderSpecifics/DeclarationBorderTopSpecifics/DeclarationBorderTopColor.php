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
class DeclarationBorderTopColor extends DeclarationBorderTop {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderTopColorWithBasicColor($basicColor) {
        $instance = new parent("border-top-color", $basicColor->stringBasicColor());
        return $instance;
    }
    
    public static function DeclarationBorderTopColorWithStringValue($stringValue) {
        $instance = new parent("border-top-color", $stringValue);
        return $instance;
    }

    public static function stringValueTransparent() {
        return "transparent";
    }
}

?>