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
class DeclarationBorderTop extends DeclarationBorder {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderTop::DeclarationBorderTopWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderTopWithStringValue($stringValue) {
        $instance = new parent("border-top", $stringValue);
        return $instance;
    }

    public static function DeclarationBorderTopWithBorderTopValue($borderTopValue) {
        $stringFullValue = "";
        $arrayBorderTopValue = $borderTopValue->getArrayBorderTopValue();
        $count = count($arrayBorderTopValue);
        for ($index = 0; $index < $count - 1; $index++) {
            $stringFullValue = $stringFullValue . $arrayBorderTopValue[$index] . " ";
        }
        $stringFullValue = $stringFullValue . $arrayBorderTopValue[$count - 1];
        $instance = new parent("border-top", $stringFullValue);
        return $instance;
    }

}

?>