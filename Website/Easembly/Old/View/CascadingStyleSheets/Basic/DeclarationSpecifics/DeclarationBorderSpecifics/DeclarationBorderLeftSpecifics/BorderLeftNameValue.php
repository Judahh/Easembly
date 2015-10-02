<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationAnimationValue
 *
 * @author Judah
 */
class BorderLeftNameValue {
    private static $borderLeftNameValueInstance = null;
    private $arrayBorderLeftNameValue;

    private function __construct() {
        array_push($this->arrayBorderLeftNameValue, "borderLeftWidth");
        array_push($this->arrayBorderLeftNameValue, "borderLeftStyle");
        array_push($this->arrayBorderLeftNameValue, "borderLeftColor");
    }

    public static function getInstance() {
        if (self::$borderLeftNameValueInstance == null) {
            self::$borderLeftNameValueInstance = new self;
        }

        return self::$borderLeftNameValueInstance;
    }

    public function getArrayBorderLeftNameValue() {
        return $this->arrayBorderLeftNameValue;
    }

}
