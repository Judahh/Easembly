<?php

/**
 * Description of BasicAngle
 *
 * @author Judah
 */

class BasicAngle {

    private $floatAngle;
    private $stringUnity;

    private function __construct($floatAngle, $stringUnity) {
        $this->floatAngle = $floatAngle;
        $this->stringUnity = $stringUnity;
    }

    public static function BasicAngleWithBasicSimpleAngle($basicSimpleAngle) {
        $instance = new self($basicSimpleAngle->getFloatSimpleAngle(), $basicSimpleAngle->getStringUnity());
        return $instance;
    }
    
    public static function BasicAngleWithFloatAngleDegrees($floatAngleDegrees) {
        $instance = new self($floatAngleDegrees, "deg");
        return $instance;
    }

    public function stringBasicAngle() {
        return $this->floatAngle.$this->stringUnity;
    }
}
