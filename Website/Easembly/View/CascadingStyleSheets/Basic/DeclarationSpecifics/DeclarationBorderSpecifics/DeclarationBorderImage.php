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
class DeclarationBorderImage extends DeclarationBorder {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderImageWithStringValue($stringValue) {
        $instance = new parent("border-image", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBorderImageWithBorderImageValue($borderImageValue) {
        $stringFullValue = "";
        $arrayBorderImageValue = $borderImageValue->getArrayBorderImageValue();
        $count = count($arrayBorderImageValue);
        for ($index = 0; $index < $count - 1; $index++) {
            $stringFullValue = $stringFullValue . $arrayBorderImageValue[$index] . " ";
        }
        $stringFullValue = $stringFullValue . $arrayBorderImageValue[$count - 1];
        $instance = new parent("border-image", $stringFullValue);
        return $instance;
    }

}

?>