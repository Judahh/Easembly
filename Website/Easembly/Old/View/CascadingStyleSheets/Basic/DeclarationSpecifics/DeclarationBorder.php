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
class DeclarationBorder extends Declaration {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderWithStringValue($stringValue) {
        $instance = new parent("border", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBorderWithBorderValue($borderValue) {
        $stringFullValue = "";
        $arrayBorderValue = $borderValue->getArrayBorderValue();
        $count = count($arrayBorderValue);
        for ($index = 0; $index < $count - 1; $index++) {
            $stringFullValue = $stringFullValue . $arrayBorderValue[$index] . " ";
        }
        $stringFullValue = $stringFullValue . $arrayBorderValue[$count - 1];
        $instance = new parent("border", $stringFullValue);
        return $instance;
    }

}

?>