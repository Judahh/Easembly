<?php

/**
 * DeclarationTextDecorationLine [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTextDecorationLine extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTextDecorationLine::DeclarationTextDecorationLineWithStringValue($stringValue);
    public static function DeclarationTextDecorationLineWithStringValue($stringValue) {
        $instance = new parent("text-decoration-line", $stringValue);
        return $instance;
    }

    public static function stringValueNone() {
        return "none";
    }

    public static function stringValueUnderline() {
        return "underline";
    }
    
    public static function stringValueOverline() {
        return "overline";
    }
    
    public static function stringValueLineThrough() {
        return "line-through";
    }
    
    public function stringDeclaration() {
        $stringFullDeclaration = "";
        $arrayStringBrowserPrefix = BrowserDiffer::getInstance()->getArrayStringBrowserPrefix();
        foreach ($arrayStringBrowserPrefix as &$stringBrowserPrefix) {
            $stringFullDeclaration = $stringFullDeclaration . $stringBrowserPrefix . $this->stringProperty . ":" . $this->stringValue . ";";
        }
        return $stringFullDeclaration;
    }
}
