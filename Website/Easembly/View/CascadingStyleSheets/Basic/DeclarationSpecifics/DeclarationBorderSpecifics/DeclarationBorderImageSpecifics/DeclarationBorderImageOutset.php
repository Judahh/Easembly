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
class DeclarationBorderImageOutset extends DeclarationBorderImage {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderImageOutset::DeclarationBorderImageOutsetWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderImageOutsetWithStringValue($stringValue) {
        $instance = new parent("border-image-outset", $stringValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBorderImageOutsetWithBasicFourPartsLength
            ($basicFourPartsLength) {
        $instance = new parent("border-image-outset", $basicFourPartsLength->stringBasicFourPartsLength());
        return $instance;
    }
    
    public static function DeclarationBorderImageOutsetWithBasicFourPartsInt
            ($basicFourPartsInt) {
        $instance = new parent("border-image-outset", $basicFourPartsInt->stringBasicFourPartsInt());
        return $instance;
    }
}

?>