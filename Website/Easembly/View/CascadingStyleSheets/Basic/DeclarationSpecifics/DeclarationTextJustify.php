<?php

/**
 * DeclarationTextJustify [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTextJustify extends Declaration {
//Constructor
//   instantiation: 
//      $declaration = DeclarationTextJustify::DeclarationTextJustifyWithStringValue($stringValue);
    public static function DeclarationTextJustifyWithStringValue($stringValue) {
        $instance = new parent("text-justify", $stringValue);
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }

    public static function stringValueInterWord() {
        return "inter-word";
    }

    public static function stringValueInterIdeograph() {
        return "inter-ideograph";
    }

    public static function stringValueInterCluster() {
        return "inter-cluster";
    }

    public static function stringValueDistribute() {
        return "distribute";
    }

    public static function stringValueKashida() {
        return "kashida";
    }

    public static function stringValueTrim() {
        return "trim";
    }

    public static function stringValueNone() {
        return "none";
    }

}
