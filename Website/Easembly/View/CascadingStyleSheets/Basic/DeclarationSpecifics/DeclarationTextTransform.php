<?php

/**
 * DeclarationTextTransform [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTextTransform extends Declaration {
//Constructor
//   instantiation: 
//      $declaration = DeclarationTextTransform::DeclarationTextTransformWithStringValue($stringValue);
    public static function DeclarationTextTransformWithStringValue($stringValue) {
        $instance = new parent("text-transform", $stringValue);
        return $instance;
    }

    public static function stringValueNone() {
        return "none";
    }

    public static function stringValueCapitalize() {
        return "capitalize";
    }

    public static function stringValueUppercase() {
        return "uppercase";
    }

    public static function stringValueLowercase() {
        return "lowercase";
    }

}
