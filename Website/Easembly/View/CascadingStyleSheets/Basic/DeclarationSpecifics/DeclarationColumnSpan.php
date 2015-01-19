<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColumnSpan
 *
 * @author Silvio
 */
class DeclarationColumnSpan extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationColumnSpan::DeclarationColumnSpanStringValue($stringValue);
        public static function DeclarationColumnSpanWithStringValue($stringValue) {
            $instance = new parent("column-span", $stringValue);
            return $instance;
        }
        
        // value: 1
        public static function stringValueOne() {
            return "one";
        }
        
        public static function stringValueAll() {
            return "all";
        }
}
