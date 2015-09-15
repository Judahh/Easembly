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
class DeclarationBorderColor extends DeclarationBorder {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderColorWithStringValue($stringValue) {
        $instance = new parent("border-color", $stringValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBorderColorWithBasicFourPartsColor
            ($basicFourPartsColor) {
        $instance = new parent("border-color", $basicFourPartsColor->stringBasicFourPartsColor());
        return $instance;
    }
    
    public static function stringValueTransparent() {
        return "transparent";
    }
}

?>