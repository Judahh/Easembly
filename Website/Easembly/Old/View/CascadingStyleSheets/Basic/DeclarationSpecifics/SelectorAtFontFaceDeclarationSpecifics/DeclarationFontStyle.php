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
class DeclarationFontStyle extends DeclarationBorderImage {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderColor::DeclarationBorderColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationFontStyleWithStringValue($stringValue) {
        $instance = new parent("font-style", $stringValue); //arrumar
        return $instance;
    }
    
    public static function stringValueNormal() {
        return "normal";
    }
    
    public static function stringValueItalic() {
        return "italic";
    }

    public static function stringValueOblique() {
        return "oblique";
    }
}

?>