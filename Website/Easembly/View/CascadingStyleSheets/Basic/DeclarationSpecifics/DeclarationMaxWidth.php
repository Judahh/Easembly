<?php

/**
 * DeclarationMaxWidth [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationMaxWidth extends Declaration {

//Constructor
//   instantiation: 
//      $declaration = DeclarationMaxWidth::DeclarationMaxWidthWithStringValue($stringValue);
    public static function DeclarationMaxWidthWithStringValue($stringValue) {
        $instance = new parent("max-width", $stringValue);
        return $instance;
    }

    public static function DeclarationMaxWidthWithBasicLength($basicLength) {
        $instance = new parent("max-width", $basicLength->stringBasicLength());
        return $instance;
    }

    public static function stringValueNone() {
        return "none";
    }
}

?>