<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationAnimationNameValue
 *
 * @author Judah
 */
class BorderImageValue {

    private $arrayBorderImageValue;

    private function __construct() {
        
    }
    
    public static function
    BorderImageValueWithDeclarationBorderImageSourceWithDeclarationBorderImageSliceWithDeclarationBorderImageWidthWithDeclarationBorderImageOutsetWithDeclarationBorderImageRepeat
    ($declarationBorderImageSource, $declarationBorderImageSlice, $declarationBorderImageWidth, $declarationBorderImageOutset, $declarationBorderImageRepeat) {
        $instance = new self();
        array_push($this->arrayBorderImageValue, $declarationBorderImageSource->getStringValue());
        array_push($this->arrayBorderImageValue, $declarationBorderImageSlice->getStringValue());
        array_push($this->arrayBorderImageValue, $declarationBorderImageWidth->getStringValue());
        array_push($this->arrayBorderImageValue, $declarationBorderImageOutset->getStringValue());
        array_push($this->arrayBorderImageValue, $declarationBorderImageRepeat->getStringValue());
        return $instance;
    }
    
    public static function
    BorderImageValueWithStringBorderImageSourceWithStringBorderImageSliceWithStringBorderImageWidthWithStringBorderImageOutsetWithStringBorderImageRepeat
    ($stringBorderImageSource, $stringBorderImageSlice, $stringBorderImageWidth, $stringBorderImageOutset, $stringBorderImageRepeat) {
        $instance = new self();
        array_push($this->arrayBorderImageValue, $stringBorderImageSource);
        array_push($this->arrayBorderImageValue, $stringBorderImageSlice);
        array_push($this->arrayBorderImageValue, $stringBorderImageWidth);
        array_push($this->arrayBorderImageValue, $stringBorderImageOutset);
        array_push($this->arrayBorderImageValue, $stringBorderImageRepeat);
        return $instance;
    }

    public static function BorderImageValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayBorderImageValue() {
        return $this->arrayBorderImageValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayBorderImageValue, $stringValue);
    }
    
    public function addStringValueWithDeclarationBorderImageSpecific($declarationBorderImageSpecific) {
        array_push($this->arrayBorderValue, $declarationBorderImageSpecific->getStringValue());
    }

    public static function getArrayBorderImageNameValue() {
        return AnimationNameValue::getInstance()->getArrayBorderImageNameValue();
    }

}
