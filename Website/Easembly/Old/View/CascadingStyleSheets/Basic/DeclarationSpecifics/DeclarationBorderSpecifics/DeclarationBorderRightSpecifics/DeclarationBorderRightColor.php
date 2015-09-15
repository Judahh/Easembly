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
class DeclarationBorderRightColor extends DeclarationBorderRight {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderRightColorWithBasicColor($basicColor) {
        $instance = new parent("border-right-color", $basicColor->stringBasicColor());
        return $instance;
    }
    
    public static function DeclarationBorderRightColorWithStringValue($stringValue) {
        $instance = new parent("border-right-color", $stringValue);
        return $instance;
    }

    public static function stringValueTransparent() {
        return "transparent";
    }
}

?>