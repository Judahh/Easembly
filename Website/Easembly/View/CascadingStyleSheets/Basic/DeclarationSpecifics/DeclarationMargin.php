<?php

/**
 * DeclarationMargin [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationMargin extends Declaration {

//Constructor
//   instantiation: 
//      $declaration = DeclarationMargin::DeclarationMarginWithStringValue($stringValue);
    public static function DeclarationMarginWithStringValue($stringValue) {
        $instance = new parent("margin", $stringValue);
        return $instance;
    }

    public static function DeclarationMarginWithBasicFourPartsLength($basicFourPartsLength) {
        $instance = new parent("margin", $basicFourPartsLength->stringBasicFourPartsLength());
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }
}

?>