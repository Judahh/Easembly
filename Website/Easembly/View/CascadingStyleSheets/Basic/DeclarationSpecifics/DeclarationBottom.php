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
class DeclarationBottom extends Declaration {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBottomWithStringValue($stringValue) {
        $instance = new parent("background-size", $stringValue);
        return $instance;
    }
    
    public static function DeclarationBottomWithBasicLength($basicLength) {
        $instance = new parent("background-size", $basicLength->stringBasicLength());
        return $instance;
    }
    
    public static function stringValueAutoSize() {
        return "auto";
    }
}

?>