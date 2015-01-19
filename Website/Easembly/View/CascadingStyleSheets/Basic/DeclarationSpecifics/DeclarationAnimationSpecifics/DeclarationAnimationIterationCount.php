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
class DeclarationAnimationIterationCount extends DeclarationAnimation {
    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationAnimationIterationCountWithStringValue($stringValue) {
        $instance = new parent("animation-iteration-count", $stringValue);
        return $instance;
    }
    
    public static function DeclarationAnimationIterationCountWithIntNumber($intNumber) {
        $instance = new parent("animation-iteration-count", $intNumber);
        return $instance;
    }
    
    public static function stringValueInfinite() {
        return "infinite";
    }
}

?>