<?php

/**
 * Description of BasicLength
 *
 * @author Judah
 */

class BasicLength {

    private $floatLength;
    private $stringUnity;

    private function __construct($floatLength, $stringUnity) {
        $this->floatLength = $floatLength;
        $this->stringUnity = $stringUnity;
    }

    public static function BasicLengthWithBasicSimpleLength($basicSimpleLength) {
        $instance = new self($basicSimpleLength->getFloatSimpleLength(), $basicSimpleLength->getStringUnity());
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthPercent($floatLengthPercent) {
        $instance = new self($floatLengthPercent, "%");
        return $instance;
    }

    public function stringBasicLength() {
        return $this->floatLength.$this->stringUnity;
    }
}
