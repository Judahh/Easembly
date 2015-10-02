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
class DeclarationAnimationDelay extends DeclarationAnimation {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationAnimationDelayWithBasicTime($basicTime) {
        $instance = new parent("animation-delay", $basicTime->stringBasicTime()); //arrumar
        return $instance;
    }
    
    public static function DeclarationAnimationDelayWithStringValue($stringValue) {
        $instance = new parent("animation-delay", $stringValue); //arrumar
        return $instance;
    }
}

?>