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
class DeclarationAnimationTimingFunction extends DeclarationAnimation {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationAnimationTimingFunctionWithStringValue($stringValue) {
        $instance = new parent("animation-timing-function", $stringValue);
        return $instance;
    }

    public static function DeclarationAnimationTimingFunctionWithBasicCubicBezier($basicCubicBezier) {
        $instance = new parent("animation-timing-function", $basicCubicBezier->stringBasicCubicBezier());
        return $instance;
    }

    public static function stringValueLinear() {
        return "linear";
    }

    public static function stringValueEase() {
        return "ease";
    }

    public static function stringValueEaseIn() {
        return "ease-in";
    }

    public static function stringValueEaseOut() {
        return "ease-out";
    }

    public static function stringValueEaseInOut() {
        return "ease-in-out";
    }

}

?>