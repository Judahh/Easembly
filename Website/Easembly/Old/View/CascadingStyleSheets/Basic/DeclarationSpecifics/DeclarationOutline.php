<?php

/**
 * DeclarationOutline [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationOutline extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationOutline::DeclarationOutlineWithStringValue($stringValue);
        public static function
    DeclarationOutlineWithOutlineValue($outlineValue) {
        $stringFullValue = "";
        $arrayOutlineValue = $outlineValue->getArrayOutlineValue();
        $count = count($arrayOutlineValue);
        for ($index = 0; $index < $count - 1; $index++) {
            $stringFullValue = $stringFullValue . $arrayOutlineValue[$index] . " ";
        }
        $stringFullValue = $stringFullValue . $arrayOutlineValue[$count-1];
        $instance = new parent("outline", $stringFullValue);
        return $instance;
    }
    
    public static function DeclarationOutlineWithStringValue($stringValue) {
        $instance = new parent("outline", $stringValue);
        return $instance;
    }
    
}

?>