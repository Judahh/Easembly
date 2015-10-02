<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColumnRuleWidth
 *
 * @author Silvio
 */
class DeclarationColumnRuleWidth extends DeclarationColumnRule {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationColumnRuleWidthWithBasicWidth($basicWidth) {
        $instance = new parent("column-rule-width", $basicWidth->stringBasicWidth()); //arrumar
        return $instance;
    }
    
    public static function DeclarationColumnRuleWidthWithStringValue($stringValue) {
        $instance = new parent("column-rule-width", $stringValue); //arrumar
        return $instance;
    }
}
