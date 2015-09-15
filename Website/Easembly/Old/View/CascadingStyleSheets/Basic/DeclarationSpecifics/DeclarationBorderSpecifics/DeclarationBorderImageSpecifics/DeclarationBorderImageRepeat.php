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
class DeclarationBorderImageRepeat extends DeclarationBorderImage {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderColor::DeclarationBorderColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderRepeatWithStringValue($stringValue) {
        $instance = new parent("border-image-repeat", $stringValue); //arrumar
        return $instance;
    }

    public static function stringValueStretch() {
        return "stretch";
    }

    public static function stringValueRepeat() {
        return "repeat";
    }
    
    public static function stringValueRound() {
        return "round";
    }
    
    public static function stringValueSpace() {
        return "space";
    }
}

?>