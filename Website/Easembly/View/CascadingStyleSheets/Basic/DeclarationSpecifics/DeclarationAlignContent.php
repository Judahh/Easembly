<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColor
 *
 * @author Judah
 */

class DeclarationAlignContent extends Declaration {
//Constructor
//   instantiation: 
//      $declaration = DeclarationAlignContent::DeclarationAlignContentWithStringValue($stringValue);
        public static function DeclarationAlignContentWithStringValue($stringValue) {
            $instance = new parent("align-content", $stringValue);
            return $instance;
        }
        
        public static function stringValueStretch() {
            return "stretch";
        }
        
        public static function stringValueCenter() {
            return "center";
        }
        
        public static function stringValueFlexStart() {
            return "flex-start";
        }
        
        public static function stringValueFlexEnd() {
            return "flex-end";
        }
        
        public static function stringValueSpaceBetween() {
            return "space-between";
        }
        
        public static function stringValueSpaceAround() {
            return "space-around";
        }
    }

?>