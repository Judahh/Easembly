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
class DeclarationBorderTopLeftRadius extends DeclarationBorderTop {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderTopLeftRadiusWithBasicLength($basicLength) {
        $instance = new parent("border-top-left-radius", $basicLength->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function DeclarationBorderTopLeftRadiusWithStringValue($stringValue) {
        $instance = new parent("border-top-left-radius", $stringValue);
        return $instance;
    }

    public static function stringValueTransparent() {
        return "transparent";
    }
}

?>