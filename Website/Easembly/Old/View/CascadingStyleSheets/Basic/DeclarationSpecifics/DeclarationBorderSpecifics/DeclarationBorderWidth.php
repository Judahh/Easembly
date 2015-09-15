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
class DeclarationBorderWidth extends DeclarationBorderRight {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderColor::DeclarationBorderColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderWidthWithStringValue($stringValue) {
        $instance = new parent("border-width", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBorderWidthWithBasicFourPartsWidth($basicFourPartsWidth) {
        $instance = new parent("border-width", $basicFourPartsWidth->stringBasicFourPartsWidth()); //arrumar
        return $instance;
    }
}

?>