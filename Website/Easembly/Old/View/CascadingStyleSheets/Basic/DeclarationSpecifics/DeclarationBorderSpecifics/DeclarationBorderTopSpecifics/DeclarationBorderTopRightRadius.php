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
class DeclarationBorderTopRightRadius extends DeclarationBorderTop {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderTopRightRadiusWithBasicLength($basicLength) {
        $instance = new parent("border-top-right-radius", $basicLength->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function DeclarationBorderTopRightRadiusWithStringValue($stringValue) {
        $instance = new parent("border-top-right-radius", $stringValue);
        return $instance;
    }

    public static function stringValueTransparent() {
        return "transparent";
    }
}

?>