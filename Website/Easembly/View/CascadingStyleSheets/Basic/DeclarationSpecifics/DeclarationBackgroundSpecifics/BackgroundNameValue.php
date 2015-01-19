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
class BackgroundNameValue {
    private static $backgroundNameValueInstance = null;
    private $arrayBackgroundNameValue;

    private function __construct() {
        array_push($this->arrayBackgroundNameValue, "backgroundColor");
        array_push($this->arrayBackgroundNameValue, "backgroundPosition");
        array_push($this->arrayBackgroundNameValue, "backgroundSize");
        array_push($this->arrayBackgroundNameValue, "backgroundRepeat");
        array_push($this->arrayBackgroundNameValue, "backgroundOrigin");
        array_push($this->arrayBackgroundNameValue, "backgroundClip");
        array_push($this->arrayBackgroundNameValue, "backgroundAttachment");
        array_push($this->arrayBackgroundNameValue, "backgroundImage");
    }

    public static function getInstance() {
        if (self::$backgroundNameValueInstance == null) {
            self::$backgroundNameValueInstance = new self;
        }

        return self::$backgroundNameValueInstance;
    }

    public function getArrayBackgroundNameValue() {
        return $this->arrayBackgroundNameValue;
    }

}
