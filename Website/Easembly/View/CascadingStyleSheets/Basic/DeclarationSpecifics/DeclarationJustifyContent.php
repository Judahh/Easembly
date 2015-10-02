<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationJustifyContent
 *
 * @author Silvio
 */
class DeclarationJustifyContent extends Declaration {
//Constructor
//   instantiation: 
//      $declaration = DeclarationJustifyContent::DeclarationJustifyContentStringValue($stringValue);
    public static function DeclarationJustifyContentWithStringValue($stringValue) {
        $instance = new parent("justify-content", $stringValue);
        return $instance;
    }

    public static function stringValueFlexStart() {
        return "flex-start";
    }

    public static function stringValueFlexEnd() {
        return "flex-end";
    }

    public static function stringValueCenter() {
        return "center";
    }

    public static function stringValueSpaceBetween() {
        return "space-between";
    }
    
    public static function stringValueSpaceAround() {
        return "space-around";
    }
}
