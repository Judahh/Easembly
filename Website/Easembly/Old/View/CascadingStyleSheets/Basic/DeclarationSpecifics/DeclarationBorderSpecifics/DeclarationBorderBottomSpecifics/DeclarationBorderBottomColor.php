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
class DeclarationBorderBottomColor extends DeclarationBorderBottom {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderBottomColorWithBasicColor($basicColor) {
        $instance = new parent("border-bottom-color", $basicColor->stringBasicColor());
        return $instance;
    }
    
    public static function DeclarationBorderBottomColorWithStringValue($stringValue) {
        $instance = new parent("border-bottom-color", $stringValue);
        return $instance;
    }

    public static function stringValueTransparent() {
        return "transparent";
    }
}

?>