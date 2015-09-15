<?php

/**
 * DeclarationPadding [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationPadding extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationPadding::DeclarationPaddingWithStringValue($stringValue);
    public static function DeclarationPaddingWithStringValue($stringValue) {
        $instance = new parent("padding", $stringValue);
        return $instance;
    }
    
    public static function DeclarationPaddingWithBasicFourPartsLength($basicFourPartsLength){
        $instance = new parent("padding", $basicFourPartsLength->stringBasicFourPartsLength());
        return $instance;        
    }
}

?>