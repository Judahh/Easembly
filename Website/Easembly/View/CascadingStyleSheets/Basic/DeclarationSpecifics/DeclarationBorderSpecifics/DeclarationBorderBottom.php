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
class DeclarationBorderBottom extends DeclarationBorder {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderBottom::DeclarationBorderBottomWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderBottomWithStringValue($stringValue) {
        $instance = new parent("border-bottom", $stringValue);
        return $instance;
    }

    public static function DeclarationBorderBottomWithBorderBottomValue($borderBottomValue) {
        $stringFullValue = "";
        $arrayBorderBottomValue = $borderBottomValue->getArrayBorderBottomValue();
        $count = count($arrayBorderBottomValue);
        for ($index = 0; $index < $count - 1; $index++) {
            $stringFullValue = $stringFullValue . $arrayBorderBottomValue[$index] . " ";
        }
        $stringFullValue = $stringFullValue . $arrayBorderBottomValue[$count - 1];
        $instance = new parent("border-bottom", $stringFullValue);
        return $instance;
    }

}

?>