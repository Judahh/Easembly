<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationDisplay
 *
 * @author Silvio
 */
class DeclarationDisplay extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationDisplay::DeclarationDisplayStringValue($stringValue);
        public static function DeclarationDisplayWithStringValue($stringValue) {
            $instance = new parent("display", $stringValue);
            return $instance;
        }
        
        public static function stringValueInline() {
            return "inline";
        }
        
        public static function stringValueBlock() {
            return "block";
        }
        
        public static function stringValueFlex() {
            return "flex";
        }
        
        public static function stringValueInlineBlock() {
            return "inline-block";
        }
        
        public static function stringValueInlineFlex() {
            return "inline-flex";
        }
        
        public static function stringValueInlineTable() {
            return "inline-table";
        }
        
        public static function stringValueListItem() {
            return "list-item";
        }
        
        public static function stringValueInlineRunIn() {
            return "run-in";
        }
        
        public static function stringValueTable() {
            return "table";
        }
        
        public static function stringValueTableCaption() {
            return "table-caption";
        }
        
        public static function stringValueTableColumnGroup() {
            return "table-column-group";
        }
        
        public static function stringValueTableHeaderGroup() {
            return "table-header-group";
        }
        
        public static function stringValueTableFooterGroup() {
            return "table-footer-group";
        }
        
        public static function stringValueTableRowGroup() {
            return "table-row-group";
        }
        
        public static function stringValueTableCell() {
            return "table-cell";
        }
        
        public static function stringValueTableColumn() {
            return "table-column";
        }
        
        public static function stringValueTableRow() {
            return "table-row";
        }
        
        public static function stringValueNone() {
            return "none";
        }
        
}
