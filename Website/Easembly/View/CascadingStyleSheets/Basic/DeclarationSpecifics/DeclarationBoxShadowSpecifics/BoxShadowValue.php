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
class BoxShadowValue {

    private $arrayBoxShadowValue;

    private function __construct() {
        
    }

    public static function
    BoxShadowValueWithBasicLengthHorizontalShadowPositionWithBasicLengthVerticalShadowPositionWithBasicLengthBlurDistanceWithBasicLengthShadowSizeWithBasicColor
    ($basicLengthHorizontalShadowPosition, $basicLengthVerticalShadowPosition, $basicLengthBlurDistance, $basicLengthShadowSize, $basicColor) {
        $instance = new self();
        array_push($this->arrayBoxShadowValue, $basicLengthHorizontalShadowPosition->stringBasicLength());
        array_push($this->arrayBoxShadowValue, $basicLengthVerticalShadowPosition->stringBasicLength());
        array_push($this->arrayBoxShadowValue, $basicLengthBlurDistance->stringBasicLength());
        array_push($this->arrayBoxShadowValue, $basicLengthShadowSize->stringBasicLength());
        array_push($this->arrayBoxShadowValue, $basicColor->stringBasicColor());
        return $instance;
    }
    
    public static function
    BoxShadowValueWithStringHorizontalShadowPositionWithStringVerticalShadowPositionWithStringBlurDistanceWithStringShadowSizeWithStringColor
    ($stringHorizontalShadowPosition, $stringVerticalShadowPosition, $stringBlurDistance, $stringShadowSize, $stringColor) {
        $instance = new self();
        array_push($this->arrayBoxShadowValue, $stringHorizontalShadowPosition);
        array_push($this->arrayBoxShadowValue, $stringVerticalShadowPosition);
        array_push($this->arrayBoxShadowValue, $stringBlurDistance);
        array_push($this->arrayBoxShadowValue, $stringShadowSize);
        array_push($this->arrayBoxShadowValue, $stringColor);
        return $instance;
    }
    
    public static function
    BoxShadowValueWithBasicLengthHorizontalShadowPositionWithBasicLengthVerticalShadowPosition
    ($basicLengthHorizontalShadowPosition, $basicLengthVerticalShadowPosition) {
        $instance = new self();
        array_push($this->arrayBoxShadowValue, $basicLengthHorizontalShadowPosition->stringBasicLength());
        array_push($this->arrayBoxShadowValue, $basicLengthVerticalShadowPosition->stringBasicLength());
        return $instance;
    }

    public static function
    BoxShadowValueWithStringHorizontalShadowPositionWithStringVerticalShadowPosition
    ($stringHorizontalShadowPosition, $stringVerticalShadowPosition) {
        $instance = new self();
        array_push($this->arrayBoxShadowValue, $stringHorizontalShadowPosition);
        array_push($this->arrayBoxShadowValue, $stringVerticalShadowPosition);
        return $instance;
    }
    
    public static function BoxShadowValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayBoxShadowValue() {
        return $this->arrayBoxShadowValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayBoxShadowValue, $stringValue);
    }

    public static function getArrayBoxShadowNameValue() {
        return AnimationNameValue::getInstance()->getArrayBoxShadowNameValue();
    }

}
