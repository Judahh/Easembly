<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Declaration CounterReset
 *
 * @author Silvio
 */
class DeclarationCounterReset extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationCounterReset::DeclarationCounterResetStringValue($stringValue);
//      $declaration = DeclarationCounterReset::DeclarationCounterResetIntegerValue($integerValue);
        public static function DeclarationCounterResetWithStringValue($stringValue) {
            $instance = new parent("counter-reset", $stringValue);
            return $instance;
        }

        public static function DeclarationCounterResetWithIntegerValue($integerValue) {
            $instance = new parent("counter-reset", $integerValue);
            return $instance;
        }
                
        public static function stringValueNone() {
            return "none";
        }

        public static function stringValueName() {
            return "name";
        }

}
