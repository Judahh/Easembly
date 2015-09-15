<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationSpacing
 *
 * @author Judah
 */
class DeclarationBorderSpacing extends DeclarationBorder {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundSpacing::DeclarationBackgroundSpacingWithStringHexSpacingValue($stringHexSpacingValue);
    public static function DeclarationBorderSpacingWithStringValue($stringValue) {
        $instance = new parent("border-spacing", $stringValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBorderSpacingWithBasicLength
            ($basicLength) {
        $instance = new parent("border-spacing", $basicLength->stringBasicLength());
        return $instance;
    }
    
    public static function DeclarationBorderSpacingWithBasicLengthHorizontalWithBasicLengthVertical($basicLengthHorizontal, $basicLengthVertical) {
        $instance = new parent("border-spacing", $basicLengthHorizontal->stringBasicLength()." ".$basicLengthVertical->stringBasicLength());
        return $instance;
    }
}

?>