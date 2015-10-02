<?php

/**
 * DeclarationClip [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationClip extends Declaration {
//Constructor
//   instantiation: 
//      $declaration = DeclarationClip::DeclarationClipStringValue($stringValue);
    public static function DeclarationClipWithStringValue($stringValue) {
        $instance = new parent("clip", $stringValue);
        return $instance;
    }

    public static function DeclarationClipWithBasicShape($basicShape) {
        $instance = new parent("margin-left", $basicShape->stringBasicShape());
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }

}

?>