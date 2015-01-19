<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColumns
 *
 * @author Silvio
 */
class DeclarationColumns extends Declaration {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function
    DeclarationColumnsWithColumnsValue($columnsValue) {
        $stringFullValue = "";
        $arrayColumnsValue = $columnsValue->getArrayColumnsValue();
        $count = count($arrayColumnsValue);
        for ($index = 0; $index < $count - 1; $index++) {
            $stringFullValue = $stringFullValue . $arrayColumnsValue[$index] . " ";
        }
        $stringFullValue = $stringFullValue . $arrayColumnsValue[$count-1];
        $instance = new parent("columns", $stringFullValue);
        return $instance;
    }
    
    public static function
    DeclarationColumnsWithStringValue($stringValue) {
        $instance = new parent("columns", $stringValue);
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
