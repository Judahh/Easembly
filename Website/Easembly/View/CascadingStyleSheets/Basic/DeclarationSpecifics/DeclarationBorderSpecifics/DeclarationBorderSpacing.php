<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationRadius
 *
 * @author Judah
 */
class DeclarationBorderRadius extends DeclarationBorder {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderRadius::DeclarationBorderRadiusWithStringHexRadiusValue($stringHexRadiusValue);
    public static function DeclarationBorderRadiusWithStringValue($stringValue) {
        $instance = new parent("border-radius", $stringValue);
        return $instance;
    }
    
    public static function DeclarationBorderRadiusWithBasicFourPartsLength
            ($basicFourPartsLength) {
        $instance = new parent("border-radius", $basicFourPartsLength->stringBasicFourPartsLength());
        return $instance;
    }
    
    public static function DeclarationBorderRadiusWithBasicFourPartsLengthHorizontalWithBasicFourPartsLengthVertical
            ($basicFourPartsLengthHorizontal, $basicFourPartsLengthVertical) {
        $instance = new parent("border-radius", $basicFourPartsLengthHorizontal->stringBasicFourPartsLength()."/".$basicFourPartsLengthVertical->stringBasicFourPartsLength());
        return $instance;
    }
    
    public static function stringValueTransparent() {
        return "transparent";
    }
}

?>