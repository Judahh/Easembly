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
class DeclarationUnicodeRange extends DeclarationBorderImage {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderColor::DeclarationBorderColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationUnicodeRangeWithStringValue($stringValue) {
        $instance = new parent("unicode-range", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationUnicodeRangeWithBasicUnicodeRange($basicUnicodeRange) {
        $instance = new parent("unicode-range", $basicUnicodeRange->stringBasicUnicodeRange()); //arrumar
        return $instance;
    }
}

?>