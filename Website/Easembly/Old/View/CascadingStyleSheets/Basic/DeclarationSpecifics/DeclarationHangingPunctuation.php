<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationHangingPunctuation
 *
 * @author Asus
 */
class DeclarationHangingPunctuation extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationHangingPunctuation::DeclarationHangingPunctuationStringValue($stringValue);
        public static function DeclarationHangingPunctuationWithStringValue($stringValue) {
            $instance = new parent("hanging-punctuation", $stringValue);
            return $instance;
        }
        
        public static function stringValueNone() {
            return "none";
        }
        
        public static function stringValueFirst() {
            return "first";
        }
        
        public static function stringValueLast() {
            return "last";
        }
        
        public static function stringValueAllowEnd() {
            return "allow-end";
        }
        
        public static function stringValueForceEnd() {
            return "force-end";
        }
        
}
