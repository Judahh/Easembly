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
class DeclarationBorderBottomLeftRadius extends DeclarationBorderBottom {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderBottomLeftRadiusWithBasicLength($basicLength) {
        $instance = new parent("border-bottom-left-radius", $basicLength->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function DeclarationBorderBottomLeftRadiusWithStringValue($stringValue) {
        $instance = new parent("border-bottom-left-radius", $stringValue);
        return $instance;
    }

    public static function stringValueTransparent() {
        return "transparent";
    }
}

?>