<?php

/**
 * DeclarationZIndex [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationZIndex extends Declaration {
//Constructor
//   instantiation: 
//      $declaration = DeclarationZIndex::DeclarationZIndexWithStringValue($stringValue);
    public static function DeclarationZIndexWithStringValue($stringValue) {
        $instance = new parent("z-index", $stringValue);
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }

    public static function stringValueNumber() {
        return "number";
    }

}

?>