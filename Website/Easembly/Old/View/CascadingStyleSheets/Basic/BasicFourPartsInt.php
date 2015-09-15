<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationInt
 *
 * @author Judah
 */
class BasicFourPartsInt{

    private $stringBasicFourPartsInt;

    private function __construct($stringBasicFourPartsInt) {
        $this->stringBasicFourPartsInt = $stringBasicFourPartsInt;
    }
    
    public static function BasicFourPartsIntWithStringValue($stringValue) {
        $instance = new parent($stringValue); //arrumar
        return $instance;
    }
    
    public static function BasicFourPartsIntWithIntAllParts
            ($intAllParts) {
        $instance = new parent($intAllParts);
        return $instance;
    }
    
    public static function 
            BasicFourPartsIntWithIntTopAndBottomPartsWithIntRightAndLeftParts
            ($intTopAndBottomParts, $intRightAndLeftParts) {
        $instance = new parent($intTopAndBottomParts." ".$intRightAndLeftParts);
        return $instance;
    }
    
    public static function 
            BasicFourPartsIntWithIntTopPartWithIntRightAndLeftPartsWithIntBottomPart
            ($intTopPart, $intRightAndLeftParts, $intBottomPart) {
        $instance = new parent($intTopPart." ".$intRightAndLeftParts." ".$intBottomPart);
        return $instance;
    }
    
    public static function 
            BasicFourPartsIntWithIntTopPartWithIntRightPartWithIntBottomPartWithIntLeftPart
            ($intTopPart, $intRightPart, $intBottomPart, $intLeftPart) {
        $instance = new parent($intTopPart." ".$intRightPart." ".$intBottomPart." ".$intLeftPart);
        return $instance;
    }
    
    public function stringBasicFourPartsInt() {
        return $this->stringBasicFourPartsInt;
    }
}

?>