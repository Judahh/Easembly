<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColumnRuleColor
 *
 * @author Silvio
 */
class DeclarationColumnRuleColor extends DeclarationColumnRule {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationColumnRuleColorWithBasicColor($basicColor) {
        $instance = new parent("column-rule-color", $basicColor->stringBasicColor()); //arrumar
        return $instance;
    }
    
    public static function DeclarationColumnRuleColorWithStringValue($stringValue) {
        $instance = new parent("column-rule-color", $stringValue); //arrumar
        return $instance;
    }
}
