<?php

/**
 * DeclarationVerticaAlign [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationVerticalAlign extends Declaration {
//Constructor
//   instantiation: 
//      $declaration = DeclarationVerticalAlign::DeclarationVerticalAlignWithStringValue($stringValue);
    public static function DeclarationVerticalAlignWithStringValue($stringValue) {
        $instance = new parent("vertical-align", $stringValue);
        return $instance;
    }

    public static function DeclarationVerticalAlignWithBasicLength($basicLength) {
        $instance = new parent("vertical-align", $basicLength->stringBasicLength());
        return $instance;
    }

    public static function stringValueBaseline() {
        return "baseline";
    }

    public static function stringValueSub() {
        return "sub";
    }

    public static function stringValueSuper() {
        return "super";
    }

    public static function stringValueTop() {
        return "top";
    }

    public static function stringValueTextTop() {
        return "text-top";
    }

    public static function stringValueMiddle() {
        return "middle";
    }

    public static function stringValueBottom() {
        return "botton";
    }

    public static function stringValueTextBottom() {
        return "text-botton";
    }

}

?>