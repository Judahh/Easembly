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
class DeclarationBorderRightWidth extends DeclarationBorderRight {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderColor::DeclarationBorderColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderRightWidthWithStringValue($stringValue) {
        $instance = new parent("border-right-width", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBorderRightWidthWithBasicWidth($basicWidth) {
        $instance = new parent("border-right-width", $basicWidth->stringBasicWidth()); //arrumar
        return $instance;
    }
}

?>