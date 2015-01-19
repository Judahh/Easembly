<?php

/**
 * DeclarationTableLayout [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTableLayout extends Declaration {
//Constructor
//   instantiation: 
//      $declaration = DeclarationTableLayout::DeclarationTableLayoutWithStringValue($stringValue);
    public static function DeclarationTableLayoutWithStringValue($stringValue) {
        $instance = new parent("table-layout", $stringValue);
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }

    public static function stringValueFixed() {
        return "fixed";
    }

}

?>