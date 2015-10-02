<?php

/**
 * DeclarationTextDecorationColor [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */


class DeclarationTextDecorationColor extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTextDecorationColor::DeclarationTextDecorationColorWithStringValue($stringValue);
    public static function DeclarationTextDecorationColorWithStringValue($stringValue) {
        $instance = new parent("text-decoration-color", $stringValue);
        return $instance;
    }
    
    public static function DeclarationTextDecorationColorWithBasicColor($basicColor) {
        $instance = new parent("text-decoration-color", $basicColor->stringBasicColor());
        return $instance;
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

?>