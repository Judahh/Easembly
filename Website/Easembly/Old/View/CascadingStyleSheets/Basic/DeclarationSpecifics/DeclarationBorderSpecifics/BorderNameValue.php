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
class BorderNameValue {
    private static $borderNameValueInstance = null;
    private $arrayBorderNameValue;

    private function __construct() {
        array_push($this->arrayBorderNameValue, "borderWidth");
        array_push($this->arrayBorderNameValue, "borderStyle");
        array_push($this->arrayBorderNameValue, "borderColor");
    }

    public static function getInstance() {
        if (self::$borderNameValueInstance == null) {
            self::$borderNameValueInstance = new self;
        }

        return self::$borderNameValueInstance;
    }

    public function getArrayBorderNameValue() {
        return $this->arrayBorderNameValue;
    }

}
