<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationDirection
 *
 * @author Silvio
 */
class DeclarationDirection extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationDirection::DeclarationDirectionStringValue($stringValue);
        public static function DeclarationDirectionWithStringValue($stringValue) {
            $instance = new parent("direction", $stringValue);
            return $instance;
        }
        
        public static function stringValueLtr() {
            return "ltr";
        }
        
        public static function stringValueRtl() {
            return "rtl";
        }
        
}
