<?php

/**
 * BasicMatrixThreeDimension [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicMatrixThreeDimensional extends BasicMatrix {
    public static function BasicMatrixThreeDimensionalWithFloatHorizontalZeroVerticalThreeWithFloatHorizontalOneVerticalThreeWithFloatHorizontalTwoVerticalThreeWithFloatHorizontalThreeVerticalThreeWithfloatHorizontalZeroVerticalTwoWithfloatHorizontalOneVerticalTwoWithfloatHorizontalTwoVerticalTwoWithFloatHorizontalThreeVerticalTwoWithFloatHorizontalZeroVerticalOneWithFloatHorizontalOneVerticalOneWithFloatHorizontalTwoVerticalOneWithFloatHorizontalThreeVerticalOneWithFloatHorizontalZeroVerticalZeroWithFloatHorizontalOneVerticalZeroWithFloatHorizontalTwoVerticalZeroWithFloatHorizontalThreeVerticalZero(
            $floatHorizontalZeroVerticalThree, $floatHorizontalOneVerticalThree, $floatHorizontalTwoVerticalThree, $floatHorizontalThreeVerticalThree,
            $floatHorizontalZeroVerticalTwo, $floatHorizontalOneVerticalTwo, $floatHorizontalTwoVerticalTwo, $floatHorizontalThreeVerticalTwo,
            $floatHorizontalZeroVerticalOne, $floatHorizontalOneVerticalOne, $floatHorizontalTwoVerticalOne, $floatHorizontalThreeVerticalOne,
            $floatHorizontalZeroVerticalZero, $floatHorizontalOneVerticalZero, $floatHorizontalTwoVerticalZero, $floatHorizontalThreeVerticalZero) {
        $instance = new parent("3d", $floatHorizontalZeroVerticalThree .".". $floatHorizontalOneVerticalThree .",". $floatHorizontalTwoVerticalThree .",". $floatHorizontalThreeVerticalThree .",".
            $floatHorizontalZeroVerticalTwo .".". $floatHorizontalOneVerticalTwo .".". $floatHorizontalTwoVerticalTwo .".". $floatHorizontalThreeVerticalTwo,
            $floatHorizontalZeroVerticalOne .".". $floatHorizontalOneVerticalOne .".". $floatHorizontalTwoVerticalOne .".". $floatHorizontalThreeVerticalOne,
            $floatHorizontalZeroVerticalZero .".". $floatHorizontalOneVerticalZero .".". $floatHorizontalTwoVerticalZero .".". $floatHorizontalThreeVerticalZero);
        return $instance;
    }
}

?>