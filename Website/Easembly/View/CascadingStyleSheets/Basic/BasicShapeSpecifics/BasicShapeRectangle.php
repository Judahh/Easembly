<?php

/**
 * Description of Shape
 *
 * @author Judah
 */
class BasicShapeRectangle extends BasicShape{


    public static function BasicShapeRectangleWithBasicSimpleLengthTopWithBasicSimpleLengthRightWithBasicSimpleLengthBottomWithBasicSimpleLengthLeft($basicSimpleLengthTop, $basicSimpleLengthRight, $basicSimpleLengthBottom, $basicSimpleLengthLeft) {
        $instance = new parent("rect", $basicSimpleLengthTop->stringBasicSimpleLength() . "," . $basicSimpleLengthRight->stringBasicSimpleLength() . "," . $basicSimpleLengthBottom->stringBasicSimpleLength() . "," . $basicSimpleLengthLeft->stringBasicSimpleLength());
        return $instance;
    }

}
