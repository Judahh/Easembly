<?php

/**
 * Description of DeclarationLength
 *
 * @author Judah
 */
class BasicFourPartsLength{

    private $stringBasicFourPartsLength;

    private function __construct($stringBasicFourPartsLength) {
        $this->stringBasicFourPartsLength = $stringBasicFourPartsLength;
    }
    
    public static function BasicFourPartsLengthWithStringValue($stringValue) {
        $instance = new parent($stringValue);
        return $instance;
    }
    
    public static function BasicFourPartsLengthWithBasicLengthAllParts
            ($basicLengthAllParts) {
        $instance = new parent($basicLengthAllParts->stringBasicLength());
        return $instance;
    }
    
    public static function 
            BasicFourPartsLengthWithBasicLengthTopAndBottomPartsWithBasicLengthRightAndLeftParts
            ($basicLengthTopAndBottomParts, $basicLengthRightAndLeftParts) {
        $instance = new parent($basicLengthTopAndBottomParts->stringBasicLength()." ".$basicLengthRightAndLeftParts->stringBasicLength());
        return $instance;
    }
    
    public static function 
            BasicFourPartsLengthWithBasicLengthTopPartWithBasicLengthRightAndLeftPartsWithBasicLengthBottomPart
            ($basicLengthTopPart, $basicLengthRightAndLeftParts, $basicLengthBottomPart) {
        $instance = new parent($basicLengthTopPart->stringBasicLength()." ".$basicLengthRightAndLeftParts->stringBasicLength()." ".$basicLengthBottomPart->stringBasicLength());
        return $instance;
    }
    
    public static function 
            BasicFourPartsLengthWithBasicLengthTopPartWithBasicLengthRightPartWithBasicLengthBottomPartWithBasicLengthLeftPart
            ($basicLengthTopPart, $basicLengthRightPart, $basicLengthBottomPart, $basicLengthLeftPart) {
        $instance = new parent($basicLengthTopPart->stringBasicLength()." ".$basicLengthRightPart->stringBasicLength()." ".$basicLengthBottomPart->stringBasicLength()." ".$basicLengthLeftPart->stringBasicLength());
        return $instance;
    }
    
    public function stringBasicFourPartsLength() {
        return $this->stringBasicFourPartsLength;
    }
}

?>