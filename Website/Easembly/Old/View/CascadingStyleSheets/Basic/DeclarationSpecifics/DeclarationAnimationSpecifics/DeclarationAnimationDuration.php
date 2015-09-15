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
class DeclarationAnimationDuration extends DeclarationAnimation {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationAnimationDurationWithBasicTime($basicTime) {
        $instance = new parent("animation-duration", $basicTime->stringBasicTime()); //arrumar
        return $instance;
    }
    
    public static function DeclarationAnimationDurationWithStringValue($stringValue) {
        $instance = new parent("animation-duration", $stringValue); //arrumar
        return $instance;
    }
}

?>