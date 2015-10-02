<?php

/**
 * DeclarationMinHeight [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationMinHeight extends Declaration {

//Constructor
//   instantiation: 
//      $declaration = DeclarationMinHeight::DeclarationMinHeightWithStringValue($stringValue);
    public static function DeclarationMinHeightWithStringValue($stringValue) {
        $instance = new parent("min-height", $stringValue);
        return $instance;
    }

    public static function DeclarationMinHeightWithBasicLength($basicLength) {
        $instance = new parent("min-height", $basicLength->stringBasicLength());
        return $instance;
    }
}

?>