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
class DeclarationBorderImageSlice extends DeclarationBorderImage {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderColor::DeclarationBorderColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderSliceWithStringValue($stringValue) {
        $instance = new parent("border-image-slice", $stringValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBorderSliceWithIntPercent($intPercent) {
        $instance = new parent("border-image-slice", $intPercent."%"); //arrumar
        return $instance;
    }
    
    public static function DeclarationBorderSliceWithIntPixel($intPixel) {
        $instance = new parent("border-image-slice", $intPixel); //arrumar
        return $instance;
    }
    
    public static function stringValueFill() {
        return "fill";
    }
}

?>