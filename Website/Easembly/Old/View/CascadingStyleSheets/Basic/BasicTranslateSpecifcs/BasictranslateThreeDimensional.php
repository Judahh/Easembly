<?php

/**
 * BasictranslateThreeDimensional [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicTranslateThreeDimensional extends BasicTranslate{
    public static function BasicTranslateThreeDimensionalWithBasicLengthHorizontalWithBasicLengthVerticalWithBasicLengthBottom($basicLengthHorizontal, $basicLengthVertical, $basicLengthLongitudinal) {
        $instance = new parent("3d", $basicLengthHorizontal->stringBasicLength() . "," . $basicLengthVertical->stringBasicLength() . "," . $basicLengthLongitudinal->stringBasicLength());
        return $instance;
    }
}

?>