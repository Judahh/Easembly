<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationEmptyCell
 *
 * @author Silvio
 */
class DeclarationEmptyCells extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationEmptyCells::DeclarationEmptyCellsStringValue($stringValue);
        public static function DeclarationEmptyCellsWithStringValue($stringValue) {
            $instance = new parent("empty-cells", $stringValue);
            return $instance;
        }
        
        public static function stringValueShow() {
            return "show";
        }
        
        public static function stringValueHide() {
            return "hide";
        }
        
}
