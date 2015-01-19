<?php

/**
 * DeclarationMinWidth [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationMinWidth extends Declaration {

//Constructor
//   instantiation: 
//      $declaration = DeclarationMinWidth::DeclarationMinWidthWithStringValue($stringValue);
    public static function DeclarationMinWidthWithStringValue($stringValue) {
        $instance = new parent("min-width", $stringValue);
        return $instance;
    }

    public static function DeclarationMinWidthWithBasicLength($basicLength) {
        $instance = new parent("min-width", $basicLength->stringBasicLength());
        return $instance;
    }
}

?>