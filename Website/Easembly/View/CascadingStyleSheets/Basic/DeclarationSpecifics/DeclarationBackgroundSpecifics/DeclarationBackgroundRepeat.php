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
class DeclarationBackgroundRepeat extends DeclarationBackground {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBackgroundRepeatWithStringValue($stringValue) {
        $instance = new parent("background-repeat", $stringValue); //arrumar
        return $instance;
    }

    public static function stringValueRepeat() {
        return "repeat";
    }
    
    public static function stringValueRepeatX() {
        return "repeat-x";
    }
    
    public static function stringValueRepeatY() {
        return "repeat-y";
    }
    
    public static function stringValueNoRepeat() {
        return "no-repeat";
    }
}

?>