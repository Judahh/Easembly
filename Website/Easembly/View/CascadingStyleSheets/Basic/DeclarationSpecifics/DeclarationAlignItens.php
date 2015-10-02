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
class DeclarationAlignItens extends Declaration {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationAlignItens::DeclarationAlignItensWithStringValue($stringValue);
    public static function DeclarationAlignItensWithStringValue($stringValue) {
        $instance = new parent("align-itens", $stringValue); //arrumar
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

    public static function stringValueBaseline() {
        return "baseline";
    }
}

?>