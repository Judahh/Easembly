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
class DeclarationColor extends Declaration {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationColorWithBasicColor($basicColor) {
        $instance = new parent("color", $basicColor->stringBasicColor());
        return $instance;
    }
    
    public static function DeclarationColorWithStringValue($stringValue) {
        $instance = new parent("color", $stringValue);
        return $instance;
    }
}

?>