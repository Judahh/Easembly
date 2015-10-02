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
class DeclarationBorderImageSource extends DeclarationBorderImage {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderColor::DeclarationBorderColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderImageSourceWithStringValue($stringValue) {
        $instance = new parent("border-image-source", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBorderImageSourceWithBasicUniformResourceLocator($basicUniformResourceLocator) {
        $instance = new parent("border-image-source", $basicUniformResourceLocator->stringBasicUniformResourceLocator()); //arrumar
        return $instance;
    }

    public static function stringValueNone() {
        return "none";
    }

}

?>