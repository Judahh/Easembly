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
class DeclarationSource extends DeclarationBorderImage {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderColor::DeclarationBorderColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationSourceWithStringValue($stringValue) {
        $instance = new parent("src", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationSourceWithBasicUniformResourceLocator($basicUniformResourceLocator) {
        $instance = new parent("src", $basicUniformResourceLocator->stringBasicUniformResourceLocator()); //arrumar
        return $instance;
    }

    public static function stringValueNone() {
        return "none";
    }

}

?>