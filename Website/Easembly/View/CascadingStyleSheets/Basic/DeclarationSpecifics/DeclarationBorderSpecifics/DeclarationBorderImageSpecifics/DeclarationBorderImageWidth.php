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
class DeclarationBorderImageWidth extends DeclarationBorderImage {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderColor::DeclarationBorderColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderImageWidthWithStringValue($stringValue) {
        $instance = new parent("border-image-width", $stringValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBorderImageWidthWithIntBorderWidth($intBorderWidth) {
        $instance = new parent("border-image-width", $intBorderWidth); //arrumar
        return $instance;
    }

    public static function DeclarationBorderImageWidthWithBasicLength($basicLength) {
        $instance = new parent("border-image-width", $basicLength->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function stringValueAuto() {
        return "auto";
    }

}

?>