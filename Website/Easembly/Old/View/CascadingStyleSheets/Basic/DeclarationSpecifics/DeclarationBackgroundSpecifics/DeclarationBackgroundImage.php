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
class DeclarationBackgroundImage extends DeclarationBackground {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBackgroundColorWithStringValue($stringValue) {
        $instance = new parent("background-image", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBackgroundColorWithBasicUniformResourceLocator($basicUniformResourceLocator) {
        $instance = new parent("background-image", $basicUniformResourceLocator->stringBasicUniformResourceLocator()); //arrumar
        return $instance;
    }

    public static function stringValueNone() {
        return "none";
    }

}

?>