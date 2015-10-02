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
class DeclarationFontWeight extends DeclarationBorderImage {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderColor::DeclarationBorderColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationFontWeightWithStringValue($stringValue) {
        $instance = new parent("font-weight", $stringValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationFontWeightWithBasicFontWeight($basicFontWeight) {
        $instance = new parent("font-weight", $basicFontWeight->stringBasicFontWeight()); //arrumar
        return $instance;
    }

    public static function stringValueNormal() {
        return "normal";
    }
    
    public static function stringValueBold() {
        return "bold";
    }
    
    //Sem Suporte
    public static function stringValueItalic() {
        return "bolder";
    }
    
    //Sem Suporte
    public static function stringValueOblique() {
        return "lighter";
    }
}

?>