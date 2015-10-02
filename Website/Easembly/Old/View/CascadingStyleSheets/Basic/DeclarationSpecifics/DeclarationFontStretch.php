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
//Sem Suporte
class DeclarationFontStretch extends DeclarationBorderImage {

    //Sem Suporte
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

    //Sem Suporte
    public static function stringValueUltraCondensed() {
        return "ultra-condensed";
    }
    //Sem Suporte
    public static function stringValueExtraCondensed() {
        return "extra-condensed";
    }
    //Sem Suporte
    public static function stringValueCondensed() {
        return "condensed";
    }
    //Sem Suporte
    public static function stringValueSemiCondensed() {
        return "semi-condensed";
    }
    
    //Sem Suporte
    public static function stringValueNormal() {
        return "normal";
    }
    
    //Sem Suporte
    public static function stringValueUltraExpanded() {
        return "ultra-expanded";
    }
    //Sem Suporte
    public static function stringValueExtraExpanded() {
        return "extra-expanded";
    }
    //Sem Suporte
    public static function stringValueExpanded() {
        return "expanded";
    }
    //Sem Suporte
    public static function stringValueSemiExpanded() {
        return "semi-expanded";
    }
}

?>