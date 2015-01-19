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
class DeclarationBorderTopWidth extends DeclarationBorderTop {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderTopWidthWithStringValue($stringValue) {
        $instance = new parent("border-top-width", $stringValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBorderTopWidthWithBasicWidth($basicWidth) {
        $instance = new parent("border-top-width", $basicWidth->stringBasicWidth()); //arrumar
        return $instance;
    }
}

?>