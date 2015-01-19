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
class BorderTopNameValue {
    private static $borderTopNameValueInstance = null;
    private $arrayBorderTopNameValue;

    private function __construct() {
        array_push($this->arrayBorderTopNameValue, "borderTopWidth");
        array_push($this->arrayBorderTopNameValue, "borderTopStyle");
        array_push($this->arrayBorderTopNameValue, "borderTopColor");
    }

    public static function getInstance() {
        if (self::$borderTopNameValueInstance == null) {
            self::$borderTopNameValueInstance = new self;
        }

        return self::$borderTopNameValueInstance;
    }

    public function getArrayBorderTopNameValue() {
        return $this->arrayBorderTopNameValue;
    }

}
