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
class DeclarationBorderBottomWidth extends DeclarationBorderBottom {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderBottomWidthWithStringValue($stringValue) {
        $instance = new parent("border-bottom-width", $stringValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBorderBottomWidthWithBasicWidth($basicWidth) {
        $instance = new parent("border-bottom-width", $basicWidth->stringBasicWidth()); //arrumar
        return $instance;
    }
}

?>