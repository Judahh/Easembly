<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColumnFill
 *
 * @author Silvio
 */
class DeclarationColumnFill extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationColumnFill::DeclarationColumnFillStringValue($stringValue);
        public static function DeclarationColumnFillWithStringValue($stringValue) {
            $instance = new parent("column-fill", $stringValue);
            return $instance;
        }

        public static function stringValueBalance() {
            return "balance";
        }
        
        public static function stringValueAuto() {
            return "auto";
        }
        
}
