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
class AnimationValue {

    private $arrayAnimationValue;

    private function __construct() {
        
    }

    public static function
    AnimationValueWithStringKeyframesWithStringDurationWithStringTimingFunctionWithStringDelayWithStringIterationCountWithStringDirectionWithStringFillModeWithStringPlayState
    ($stringKeyframes, $stringDuration, $stringTimingFunction, $stringDelay, $stringIterationCount, $stringDirection, $stringFillMode, $stringPlayState) {
        $instance = new self();
        array_push($this->arrayAnimationValue, $stringKeyframes);
        array_push($this->arrayAnimationValue, $stringDuration);
        array_push($this->arrayAnimationValue, $stringTimingFunction);
        array_push($this->arrayAnimationValue, $stringDelay);
        array_push($this->arrayAnimationValue, $stringIterationCount);
        array_push($this->arrayAnimationValue, $stringDirection);
        array_push($this->arrayAnimationValue, $stringFillMode);
        array_push($this->arrayAnimationValue, $stringPlayState);
        return $instance;
    }
    
    public static function
    AnimationValueWithDeclarationAnimationNameWithDeclarationAnimationDurationWithDeclarationAnimationTimingFunctionWithDeclarationAnimationDelayWithDeclarationAnimationIterationCountWithDeclarationAnimationDirectionWithDeclarationAnimationFillModeWithDeclarationAnimationPlayState
    ($declarationAnimationName, $declarationAnimationDuration, $declarationAnimationTimingFunction, $declarationAnimationDelay, $declarationAnimationIterationCount, $declarationAnimationDirection, $declarationAnimationFillMode, $declarationAnimationPlayState) {
        $instance = new self();
        array_push($this->arrayAnimationValue, $declarationAnimationName->getStringValue());
        array_push($this->arrayAnimationValue, $declarationAnimationDuration->getStringValue());
        array_push($this->arrayAnimationValue, $declarationAnimationTimingFunction->getStringValue());
        array_push($this->arrayAnimationValue, $declarationAnimationDelay->getStringValue());
        array_push($this->arrayAnimationValue, $declarationAnimationIterationCount->getStringValue());
        array_push($this->arrayAnimationValue, $declarationAnimationDirection->getStringValue());
        array_push($this->arrayAnimationValue, $declarationAnimationFillMode->getStringValue());
        array_push($this->arrayAnimationValue, $declarationAnimationPlayState->getStringValue());
        return $instance;
    }

    public static function AnimationValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayAnimationValue() {
        return $this->arrayAnimationValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayAnimationValue, $stringValue);
    }
    
    public function addStringValueWithDeclarationAnimationSpecific($declarationAnimationSpecific) {
        array_push($this->arrayAnimationValue, $declarationAnimationSpecific->getStringValue());
    }

    public static function getArrayAnimationNameValue() {
        return AnimationNameValue::getInstance()->getArrayAnimationNameValue();
    }

}
