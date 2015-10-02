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
class BorderBottomNameValue {
    private static $borderBottomNameValueInstance = null;
    private $arrayBorderBottomNameValue;

    private function __construct() {
        array_push($this->arrayBorderBottomNameValue, "borderBottomWidth");
        array_push($this->arrayBorderBottomNameValue, "borderBottomStyle");
        array_push($this->arrayBorderBottomNameValue, "borderBottomColor");
    }

    public static function getInstance() {
        if (self::$borderBottomNameValueInstance == null) {
            self::$borderBottomNameValueInstance = new self;
        }

        return self::$borderBottomNameValueInstance;
    }

    public function getArrayBorderBottomNameValue() {
        return $this->arrayBorderBottomNameValue;
    }

}
