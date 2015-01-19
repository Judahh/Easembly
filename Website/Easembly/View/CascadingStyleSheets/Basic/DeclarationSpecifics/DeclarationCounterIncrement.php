<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationCounterIncrement
 *
 * @author Asus
 */
class DeclarationCounterIncrement extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationCounterIncrement::DeclarationCounterIncrementStringValue($stringValue);]
//      $declaration = DeclarationCounterIncrement::DeclarationCounterIncrementIntegerValue($integerValue);]
        public static function DeclarationCounterIncrementWithStringValue($stringValue) {
            $instance = new parent("counter-increment", $stringValue);
            return $instance;
        }
        
        public static function DeclarationCounterIncrementWithIntegerValue($integerValue) {
            $instance = new parent("counter-increment", $integerValue);
            return $instance;
        }

        public static function stringValueNone() {
            return "none";
        }
        
}
