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
class DeclarationAnimationDirection extends DeclarationAnimation {
    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationAnimationDirectionWithStringValue($stringValue) {
        $instance = new parent("animation-direction", $stringValue); //arrumar
        return $instance;
    }
    
    public static function stringValueNormal() {
        return "normal";
    }

    public static function stringValueReverse() {
        return "reverse";
    }
    
    public static function stringValueAlternate() {
        return "alternate";
    }

    public static function stringValueAlternateReverse() {
        return "alternate-reverse";
    }
}

?>