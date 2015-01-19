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
class BoxShadowNameValue {
    private static $boxShadowNameValueInstance = null;
    private $arrayBoxShadowNameValue;
    private $arrayBoxShadowOptionalValue;
    
    private function __construct() {
        array_push($this->arrayBoxShadowNameValue, "horizontalShadow");
        array_push($this->arrayBoxShadowNameValue, "verticalShadow");
        array_push($this->arrayBoxShadowNameValue, "blur");
        array_push($this->arrayBoxShadowNameValue, "spread");
        array_push($this->arrayBoxShadowNameValue, "color");
        
        array_push($this->arrayBoxShadowOptionalValue, "Required");
        array_push($this->arrayBoxShadowOptionalValue, "Required");
        array_push($this->arrayBoxShadowOptionalValue, "Optional");
        array_push($this->arrayBoxShadowOptionalValue, "Optional");
        array_push($this->arrayBoxShadowOptionalValue, "Optional");
    }

    public static function getInstance() {
        if (self::$boxShadowNameValueInstance == null) {
            self::$boxShadowNameValueInstance = new self;
        }

        return self::$boxShadowNameValueInstance;
    }

    public function getArrayBoxShadowNameValue() {
        return $this->arrayBoxShadowNameValue;
    }

}
