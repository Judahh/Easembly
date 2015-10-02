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
    class DeclarationBoxSizing extends Declaration {

        //Constructor
        //   instantiation: 
        //      $declaration = DeclarationAlignContent::DeclarationAlignContentWithStringValue($stringValue);
        public static function DeclarationBoxSizingWithStringValue($stringValue) {
            $instance = new parent("box-sizing", $stringValue); //arrumar
            return $instance;
        }
        
        public static function stringValueContentBox() {
            return "content-box";
        }
        
        public static function stringValueBorderBox() {
            return "border-box";
        }
    }

?>