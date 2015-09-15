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
class DeclarationBoxShadow extends Declaration {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);

    public static function DeclarationBoxShadowWithBoxShadowValue($boxShadowValue) {
        $stringFullValue = "";
        $arrayBoxShadowValue = $boxShadowValue->getArrayBoxShadowValue();
        $count = count($arrayBoxShadowValue);
        for ($index = 0; $index < $count - 1; $index++) {
            $stringFullValue = $stringFullValue . $arrayBoxShadowValue[$index] . " ";
        }
        $stringFullValue = $stringFullValue . $arrayBoxShadowValue[$count-1];
        $instance = new parent("box-shadow", $stringFullValue);
        return $instance;
    }
    
    public static function DeclarationBoxShadowWithStringValue($stringValue) {
        $instance = new parent("box-shadow", $stringValue);
        return $instance;
    }
    
    public static function stringValueInset() {
        return "inset";
    }

    public static function stringValueNone() {
        return "none";
    }
}

?>