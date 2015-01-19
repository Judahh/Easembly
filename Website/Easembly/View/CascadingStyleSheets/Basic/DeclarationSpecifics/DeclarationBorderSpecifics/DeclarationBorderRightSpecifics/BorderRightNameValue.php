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
class BorderRightNameValue {
    private static $borderRightNameValueInstance = null;
    private $arrayBorderRightNameValue;

    private function __construct() {
        array_push($this->arrayBorderRightNameValue, "borderRightWidth");
        array_push($this->arrayBorderRightNameValue, "borderRightStyle");
        array_push($this->arrayBorderRightNameValue, "borderRightColor");
    }

    public static function getInstance() {
        if (self::$borderRightNameValueInstance == null) {
            self::$borderRightNameValueInstance = new self;
        }

        return self::$borderRightNameValueInstance;
    }

    public function getArrayBorderRightNameValue() {
        return $this->arrayBorderRightNameValue;
    }

}
