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
class DeclarationBorderCollapse extends DeclarationBorder {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderCollapseWithStringValue($stringValue) {
        $instance = new parent("border-collapse", $stringValue); //arrumar
        return $instance;
    }
    
    public static function stringValueSeparate() {
        return "separate";
    }
    
    public static function stringValueCollapse() {
        return "collapse";
    }
}

?>