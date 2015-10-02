<?php

/**
 * DeclarationOrder [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationOrder extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationOrder::DeclarationOrderWithStringValue($stringValue);
        public static function DeclarationOrderWithStringValue($stringValue) {
            $instance = new parent("order", $stringValue);
            return $instance;
        }
        
        public static function stringValueNumber() {
            return "number";
        }
}

?>