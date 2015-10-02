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
class DeclarationAnimationFillMode extends DeclarationAnimation {
    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationAnimationFillModeWithStringValue($stringValue) {
        $instance = new parent("animation-fill-mode", $stringValue); //arrumar
        return $instance;
    }
    
    public static function stringValueNone() {
        return "none";
    }

    public static function stringValueForwards() {
        return "forwards";
    }
    
    public static function stringValueBackwards() {
        return "backwards";
    }
    
    public static function stringValueBoth() {
        return "both";
    }
}

?>