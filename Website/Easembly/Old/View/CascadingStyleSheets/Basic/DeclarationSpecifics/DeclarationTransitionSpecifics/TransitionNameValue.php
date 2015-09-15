<?php
/**
 * DeclarationTransformOrigin [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class TransitionNameValue {
    private static $transitionNameValueInstance = null;
    private $arrayTransitionNameValue;

    private function __construct() {
        array_push($this->arrayTransitionNameValue, "stringTransitionProperty");
        array_push($this->arrayTransitionNameValue, "stringTransitionDuration");
        array_push($this->arrayTransitionNameValue, "stringTransitionTimingFunction");
        array_push($this->arrayTransitionNameValue, "stringTransitionDelay");

    }

    public static function getInstance() {
        if (self::$transitionNameValueInstance == null) {
            self::$transitionNameValueInstance = new self;
        }

        return self::$transitionNameValueInstance;
    }

    public function getArrayTransitionNameValue() {
        return $this->arrayTransitionNameValue;
    }
}
