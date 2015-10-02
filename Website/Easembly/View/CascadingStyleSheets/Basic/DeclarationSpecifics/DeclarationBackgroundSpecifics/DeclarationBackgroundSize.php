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
class DeclarationBackgroundSize extends DeclarationBackground {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBackgroundSizeWithStringValue($stringValue) {
        $instance = new parent("background-size", $stringValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundSizeWithBasicLengthHorizontal($basicLengthHorizontal) {
        $instance = new parent("background-size", $basicLengthHorizontal->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundSizeWithBasicLengthVertical($basicLengthVertical) {
        $instance = new parent("background-size", "auto ".$basicLengthVertical->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundSizeWithBasicLengthHorizontalWithBasicLengthVertical($basicLengthHorizontal, $basicLengthVertical) {
        $instance = new parent("background-size", $basicLengthHorizontal->stringBasicLength()." ".$basicLengthVertical->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function stringValueAutoSize() {
        return "auto";
    }
    
    public static function stringValueCover() {
        return "cover";
    }
    
    public static function stringValueContain() {
        return "contain";
    }
}

?>