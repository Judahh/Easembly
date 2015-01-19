<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FlexValue
 *
 * @author Silvio - ver filhos e alterar
 */
class FlexValue {
    
   private $arrayFlexValue;

    private function __construct() {
        
    }

    public static function
    FlexWithStringKeyframesWithStringDurationWithStringTimingFunctionWithStringDelayWithStringIterationCountWithStringDirectionWithStringFillModeWithStringPlayState
    ($stringKeyframes, $stringDuration, $stringTimingFunction, $stringDelay, $stringIterationCount, $stringDirection, $stringFillMode, $stringPlayState) {
        $instance = new self();
        array_push($this->arrayFlexValue, $stringKeyframes);
        array_push($this->arrayFlexValue, $stringDuration);
        array_push($this->arrayFlexValue, $stringTimingFunction);
        array_push($this->arrayFlexValue, $stringDelay);
        array_push($this->arrayFlexValue, $stringIterationCount);
        array_push($this->arrayFlexValue, $stringDirection);
        array_push($this->arrayFlexValue, $stringFillMode);
        array_push($this->arrayFlexValue, $stringPlayState);
        return $instance;
    }
    
    public static function
    FlexWithDeclarationFlexNameWithDeclarationFlexDurationWithDeclarationFlexTimingFunctionWithDeclarationFlexDelayWithDeclarationFlexIterationCountWithDeclarationFlexDirectionWithDeclarationFlexFillModeWithDeclarationFlexPlayState
    ($declarationFlexName, $declarationFlexDuration, $declarationFlexTimingFunction, $declarationFlexDelay, $declarationFlexIterationCount, $declarationFlexDirection, $declarationFlexFillMode, $declarationFlexPlayState) {
        $instance = new self();
        array_push($this->arrayFlexValue, $declarationFlexName->getStringValue());
        array_push($this->arrayFlexValue, $declarationFlexDuration->getStringValue());
        array_push($this->arrayFlexValue, $declarationFlexTimingFunction->getStringValue());
        array_push($this->arrayFlexValue, $declarationFlexDelay->getStringValue());
        array_push($this->arrayFlexValue, $declarationFlexIterationCount->getStringValue());
        array_push($this->arrayFlexValue, $declarationFlexDirection->getStringValue());
        array_push($this->arrayFlexValue, $declarationFlexFillMode->getStringValue());
        array_push($this->arrayFlexValue, $declarationFlexPlayState->getStringValue());
        return $instance;
    }

    public static function FlexValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayFlexValue() {
        return $this->arrayFlexValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayFlexValue, $stringValue);
    }
    
    public function addStringValueWithDeclarationFlexSpecific($declarationFlexSpecific) {
        array_push($this->arrayFlexValue, $declarationFlexSpecific->getStringValue());
    }

    public static function getArrayFlexNameValue() {
        return FlexNameValue::getInstance()->getArrayFlexNameValue();
    }


}
