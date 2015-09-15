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
class DeclarationFontStretch extends DeclarationBorderImage {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderColor::DeclarationBorderColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationFontStretchWithStringValue($stringValue) {
        $instance = new parent("font-stretch", $stringValue); //arrumar
        return $instance;
    }

    //Sem Suporte
    public static function stringValueWider() {
        return "wider";
    }
    
    //Sem Suporte
    public static function stringValueNarrower() {
        return "narrower";
    }

    
    public static function stringValueUltraCondensed() {
        return "ultra-condensed";
    }
    
    public static function stringValueExtraCondensed() {
        return "extra-condensed";
    }
    
    public static function stringValueCondensed() {
        return "condensed";
    }
    
    public static function stringValueSemiCondensed() {
        return "semi-condensed";
    }
    
    
    public static function stringValueNormal() {
        return "normal";
    }
    
    
    public static function stringValueUltraExpanded() {
        return "ultra-expanded";
    }
    
    public static function stringValueExtraExpanded() {
        return "extra-expanded";
    }
    
    public static function stringValueExpanded() {
        return "expanded";
    }
    
    public static function stringValueSemiExpanded() {
        return "semi-expanded";
    }
}

?>