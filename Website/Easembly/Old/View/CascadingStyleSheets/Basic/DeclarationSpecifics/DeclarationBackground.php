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
class DeclarationBackground extends Declaration {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);

    public static function DeclarationBackgroundWithBackgroundValue($backgroundValue) {
        $stringFullValue = "";
        $arrayBackgroundValue = $backgroundValue->getArrayBackgroundValue();
        $count = count($arrayBackgroundValue);
        for ($index = 0; $index < $count - 1; $index++) {
            $stringFullValue = $stringFullValue . $arrayBackgroundValue[$index] . " ";
        }
        $stringFullValue = $stringFullValue . $arrayBackgroundValue[$count-1];
        $instance = new parent("background", $stringFullValue);
        return $instance;
    }
    
    public static function DeclarationBackgroundWithStringValue($stringValue) {
        $instance = new parent("background", $stringValue);
        return $instance;
    }
}

?>