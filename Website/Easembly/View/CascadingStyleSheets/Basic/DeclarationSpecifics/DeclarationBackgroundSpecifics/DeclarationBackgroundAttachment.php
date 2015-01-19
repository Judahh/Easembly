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
class DeclarationBackgroundAttachment extends DeclarationBackground {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBackgroundAttachmentWithStringValue($stringValue) {
        $instance = new parent("background-attachment", $stringValue); //arrumar
        return $instance;
    }

    public static function stringValueScroll() {
        return "scroll";
    }

    public static function stringValueFixed() {
        return "fixed";
    }
    
    public static function stringValueLocal() {
        return "local";
    }
}

?>