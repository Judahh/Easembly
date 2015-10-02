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
class BackgroundValue {
    private $arrayBackgroundValue;
    
    private function __construct() {
        
    }

    public static function
    BackgroundValueWithStringAttachmentWithStringClipWithStringColorWithStringImageWithStringOriginWithStringPositionWithStringRepeatWithStringSize
    ($stringAttachment, $stringClip, $stringColor, $stringImage, $stringOrigin, $stringPosition, $stringRepeat, $stringSize) {
        $instance = new self();
        array_push($this->arrayBackgroundValue, $stringColor);
        array_push($this->arrayBackgroundValue, $stringPosition);
        array_push($this->arrayBackgroundValue, $stringSize);
        array_push($this->arrayBackgroundValue, $stringRepeat);
        array_push($this->arrayBackgroundValue, $stringOrigin);
        array_push($this->arrayBackgroundValue, $stringClip);
        array_push($this->arrayBackgroundValue, $stringAttachment);
        array_push($this->arrayBackgroundValue, $stringImage);
        return $instance;
    }
    
    public static function
    BackgroundValueWithDeclarationBackgroundAttachmentWithDeclarationBackgroundClipWithDeclarationBackgroundColorWithDeclarationBackgroundImageWithDeclarationBackgroundOriginWithDeclarationBackgroundPositionWithDeclarationBackgroundRepeatWithDeclarationBackgroundSize
    ($declarationBackgroundAttachment, $declarationBackgroundClip, $declarationBackgroundColor, $declarationBackgroundImage, $declarationBackgroundOrigin, $declarationBackgroundPosition, $declarationBackgroundRepeat, $declarationBackgroundSize) {
        $instance = new self();
        array_push($this->arrayBackgroundValue, $declarationBackgroundColor->getStringValue());
        array_push($this->arrayBackgroundValue, $declarationBackgroundPosition->getStringValue());
        array_push($this->arrayBackgroundValue, $declarationBackgroundSize->getStringValue());
        array_push($this->arrayBackgroundValue, $declarationBackgroundRepeat->getStringValue());
        array_push($this->arrayBackgroundValue, $declarationBackgroundOrigin->getStringValue());
        array_push($this->arrayBackgroundValue, $declarationBackgroundClip->getStringValue());
        array_push($this->arrayBackgroundValue, $declarationBackgroundAttachment->getStringValue());
        array_push($this->arrayBackgroundValue, $declarationBackgroundImage->getStringValue());
        return $instance;
    }

    public static function BackgroundValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayBackgroundValue() {
        return $this->arrayBackgroundValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayBackgroundValue, $stringValue);
    }

    public function addStringValueWithDeclarationBackgroundSpecific($declarationBackgroundSpecific) {
        array_push($this->arrayAnimationValue, $declarationBackgroundSpecific->getStringValue());
    }
    
    public static function getArrayBackgroundNameValue() {
        return AnimationNameValue::getInstance()->getArrayBackgroundNameValue();
    }

}
