<?php

/**
 * Description of Shape
 *
 * @author Judah
 */
class BasicShape {

    private $stringShapeType;
    private $stringShapeValue;

    private function __construct($stringShapeType, $stringShapeValue) {
        $this->stringShapeType = $stringShapeType;
        $this->stringShapeValue = $stringShapeValue;
    }

    public static function BasicShapeWithStringShapeTypeWithStringShapeValue($stringShapeType, $stringShapeValue) {
        $instance = new self($stringShapeType, $stringShapeValue);
        return $instance;
    }

    public function stringBasicShape() {
        return $this->stringShapeType . "(" . $this->stringShapeValue . ")";
    }

}
