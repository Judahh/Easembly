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
class DeclarationBackgroundPosition extends DeclarationBackground {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBackgroundPositionWithStringValue($stringValue) {
        $instance = new parent("background-position", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBackgroundPositionWithBasicFullPositionX($basicFullPositionX) {
        $instance = new parent("background-position", $basicFullPositionX->stringBasicFullPosition()); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithBasicFullPositionXWithBasicFullPositionY($basicFullPositionX, $basicFullPositionY) {
        $instance = new parent("background-position", $basicFullPositionX->stringBasicFullPosition()." ".$basicFullPositionY->stringBasicFullPosition()); //arrumar
        return $instance;
    }
}

?>