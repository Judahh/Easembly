<?php

/**
 * DeclarationMaxHeight [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationMaxHeight extends Declaration {

//Constructor
//   instantiation: 
//      $declaration = DeclarationMaxHeight::DeclarationMaxHeightWithStringValue($stringValue);
    public static function DeclarationMaxHeightWithStringValue($stringValue) {
        $instance = new parent("max-height", $stringValue);
        return $instance;
    }

    public static function DeclarationMaxHeightWithBasicLength($basicLength) {
        $instance = new parent("max-height", $basicLength->stringBasicLength());
        return $instance;
    }

    public static function stringValueNone() {
        return "none";
    }
}

?>