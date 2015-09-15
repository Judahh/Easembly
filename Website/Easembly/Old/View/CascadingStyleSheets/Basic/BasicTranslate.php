<?php

/**
 * BasicTranslate [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicTranslate {

    private $stringTranslateType;
    private $stringTranslateValue;

    private function __construct($stringTranslateType, $stringTranslateValue) {
        $this->stringTranslateType = $stringTranslateType;
        $this->stringTranslateValue = $stringTranslateValue;
    }

    public static function BasicTranslateWithStringTranslateTypeWithStringTranslateValue($stringTranslateType, $stringTranslateValue) {
        $instance = new self($stringTranslateType, $stringTranslateValue);
        return $instance;
    }

    public function stringBasicTranslate() {
        return "translate" . $this->stringTranslateType . "(" . $this->stringTranslateValue . ")";
    }
    
}

?>