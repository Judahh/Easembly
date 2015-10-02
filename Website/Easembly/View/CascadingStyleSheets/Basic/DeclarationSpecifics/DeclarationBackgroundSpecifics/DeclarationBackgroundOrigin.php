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
class DeclarationBackgroundOrigin extends DeclarationBackground {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBackgroundOriginWithStringValue($stringValue) {
        $instance = new parent("background-origin", $stringValue); //arrumar
        return $instance;
    }

    public static function stringValueBorderBox() {
        return "border-box";
    }

    public static function stringValuePaddingBox() {
        return "padding-box";
    }
    
    public static function stringValueContentBox() {
        return "content-box";
    }
}

?>