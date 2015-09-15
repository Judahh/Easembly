<?php
/**
 * DeclarationTransformOrigin [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class TransitionValue {
    private $arrayTransitionValue;

    private function __construct() {
        
    }

    public static function
    TransitionValueWithStringTransitionDurationWithStringTransitionTimingFunctionWithStringTransitionDelayWithStringTransitionProperty
    ($stringTransitionDuration, $stringTransitionTimingFunction, $stringTransitionDelay, $stringTransitionProperty) {
        $instance = new self();
        array_push($this->arrayTransitionValue, $stringTransitionDuration);
        array_push($this->arrayTransitionValue, $stringTransitionTimingFunction);
        array_push($this->arrayTransitionValue, $stringTransitionDelay);
        array_push($this->arrayTransitionValue, $stringTransitionProperty);
        return $instance;
    }
    
    public static function
    TransitionValueWithDeclarationTransitionDurationWithDeclarationTransitionTimingFunctionWithDeclarationTransitionDelayWithDeclarationTransitionProperty
    ($declarationTransitionDuration, $declarationTransitionTimingFunction, $declarationTransitionDelay, $declarationTransitionProperty) {
        $instance = new self();
        
        array_push($this->arrayTransitionValue, $declarationTransitionDuration->getStringValue());
        array_push($this->arrayTransitionValue, $declarationTransitionTimingFunction->getStringValue());
        array_push($this->arrayTransitionValue, $declarationTransitionDelay->getStringValue());
        array_push($this->arrayTransitionValue, $declarationTransitionProperty->getStringValue());
        
        return $instance;
    }

    public static function TransitionValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayTransitionValue() {
        return $this->arrayTransitionValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayTransitionValue, $stringValue);
    }
    
    public function addStringValueWithDeclarationTransitionSpecific($declarationTransitionSpecific) {
        array_push($this->arrayTransitionValue, $declarationTransitionSpecific->getStringValue());
    }

    public static function getArrayTransitionNameValue() {
        return TransitionNameValue::getInstance()->getArrayTransitionNameValue();
    }
}
