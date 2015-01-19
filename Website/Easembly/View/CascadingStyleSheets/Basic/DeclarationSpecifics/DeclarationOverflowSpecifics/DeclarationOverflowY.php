<?php

/**
 * DeclarationOverflowY [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationOverflowY extends DeclarationOverflow{
//Constructor
//   instantiation: 
//      $declaration = DeclarationOverflowY::DeclarationOverflowYWithStringValue($stringValue);
    public static function DeclarationOverflowYWithStringValue($stringValue) {
        $instance = new parent("overflow-y", $stringValue);
        return $instance;
    }

}

?>