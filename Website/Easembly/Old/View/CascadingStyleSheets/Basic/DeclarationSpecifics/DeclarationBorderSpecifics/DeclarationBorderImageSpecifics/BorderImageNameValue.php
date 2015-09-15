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
class BorderImageNameValue {
    private static $borderImageNameValueInstance = null;
    private $arrayBorderImageNameValue;

    private function __construct() {
        array_push($this->arrayBorderImageNameValue, "borderImageSource");
        array_push($this->arrayBorderImageNameValue, "borderImageSlice");
        array_push($this->arrayBorderImageNameValue, "borderImageWidth");
        array_push($this->arrayBorderImageNameValue, "borderImageOutset");
        array_push($this->arrayBorderImageNameValue, "borderImageRepeat");
    }

    public static function getInstance() {
        if (self::$borderImageNameValueInstance == null) {
            self::$borderImageNameValueInstance = new self;
        }

        return self::$borderImageNameValueInstance;
    }

    public function getArrayBorderImageNameValue() {
        return $this->arrayBorderImageNameValue;
    }

}
