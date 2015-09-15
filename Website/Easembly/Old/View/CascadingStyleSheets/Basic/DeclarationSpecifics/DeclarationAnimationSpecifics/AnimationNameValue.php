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
class AnimationNameValue {

    private static $animationNameValueInstance = null;
    private $arrayAnimationNameValue;

    private function __construct() {
        array_push($this->arrayAnimationNameValue, "stringKeyframes");
        array_push($this->arrayAnimationNameValue, "stringDuration");
        array_push($this->arrayAnimationNameValue, "stringTimingFunction");
        array_push($this->arrayAnimationNameValue, "stringDelay");
        array_push($this->arrayAnimationNameValue, "stringIterationCount");
        array_push($this->arrayAnimationNameValue, "stringDirection");
        array_push($this->arrayAnimationNameValue, "stringFillMode");
        array_push($this->arrayAnimationNameValue, "stringPlayState");
    }

    public static function getInstance() {
        if (self::$animationNameValueInstance == null) {
            self::$animationNameValueInstance = new self;
        }

        return self::$animationNameValueInstance;
    }

    public function getArrayAnimationNameValue() {
        return $this->arrayAnimationNameValue;
    }

}
