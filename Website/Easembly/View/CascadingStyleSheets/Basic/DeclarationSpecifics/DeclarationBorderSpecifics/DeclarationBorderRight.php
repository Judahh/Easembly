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
class DeclarationBorderRight extends DeclarationBorder {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderRightWithStringValue($stringValue) {
        $instance = new parent("border-right", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBorderRightWithBorderRightValue($borderRightValue) {
        $stringFullValue = "";
        $arrayBorderRightValue = $borderRightValue->getArrayBorderRightValue();
        $count = count($arrayBorderRightValue);
        for ($index = 0; $index < $count - 1; $index++) {
            $stringFullValue = $stringFullValue . $arrayBorderRightValue[$index] . " ";
        }
        $stringFullValue = $stringFullValue . $arrayBorderRightValue[$count - 1];
        $instance = new parent("border-right", $stringFullValue);
        return $instance;
    }

}

?>