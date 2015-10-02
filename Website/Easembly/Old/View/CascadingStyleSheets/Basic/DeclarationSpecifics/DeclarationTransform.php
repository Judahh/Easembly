<?php

/**
 * DeclarationTransformOrigin [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTransform extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTransform::DeclarationTransformWithStringValue($stringValue);
    public static function DeclarationTransformWithStringValue($stringValue) {
        $instance = new parent("transform", $stringValue);
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrix($auxiliaryMatrix) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotate($auxiliaryRotate) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryScale($auxiliaryScale) {
        $instance = new parent("transform", $auxiliaryScale>-stringAuxiliaryScale());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliarySkew($auxiliarySkew) {
        $instance = new parent("transform", $auxiliarySkew->stringAuxiliarySkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryTranslate($auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicPerspective($basicPerspective) {
        $instance = new parent("transform", $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotate($auxiliaryMatrix, $auxiliaryRotate) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " .$auxiliaryRotate->stringAuxiliaryRotate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryScale($auxiliaryMatrix, $auxiliaryScale) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " .$auxiliaryScale->stringAuxiliaryScale());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliarySkew($auxiliaryMatrix, $auxiliarySkew) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " .$auxiliarySkew->stringAuxiliarySkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryTranslate($auxiliaryMatrix, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " .$auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithBasicPerspective($auxiliaryMatrix, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " .$basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliaryScale($auxiliaryRotate, $auxiliaryScale) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " .$auxiliaryScale->stringAuxiliaryScale());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliarySkew($auxiliaryRotate, $auxiliarySkew) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliarySkew->stringAuxiliarySkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliaryTranslate($auxiliaryRotate, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithBasicPerspective($auxiliaryRotate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryScaleWithAuxiliarySkew($auxiliaryScale, $auxiliarySkew) {
        $instance = new parent("transform", $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryScaleWithAuxiliaryTranslate($auxiliaryScale, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryScaleWithBasicPerspective($auxiliaryScale, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryScale->stringAuxiliaryScale(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliarySkewWithAuxiliaryTranslate($auxiliarySkew, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliarySkewWithBasicPerspective($auxiliarySkew, $basicPerspective) {
        $instance = new parent("transform", $auxiliarySkew->stringAuxiliarySkew(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTranslateWithAuxiliarySkewWithBasicPerspective($auxiliarySkew, $basicPerspective) {
        $instance = new parent("transform", $auxiliarySkew->stringAuxiliarySkew(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliaryScale($auxiliaryMatrix, $auxiliaryRotate, $auxiliaryScale) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliarySkew($auxiliaryMatrix, $auxiliaryRotate, $auxiliarySkew) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliarySkew->stringAuxiliarySkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliaryTranslate($auxiliaryMatrix, $auxiliaryRotate, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithBasicPerspective($auxiliaryMatrix, $auxiliaryRotate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryScaleWithAuxiliarySkew($auxiliaryMatrix, $auxiliaryScale, $auxiliarySkew) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryScaleWithAuxiliaryTranslate($auxiliaryMatrix, $auxiliaryScale, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryScaleWithBasicPerspective($auxiliaryMatrix, $auxiliaryScale, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliarySkewWithAuxiliaryTranslate($auxiliaryMatrix, $auxiliarySkew, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliarySkewWithBasicPerspective($auxiliaryMatrix, $auxiliarySkew, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryTranslateWithBasicPerspective($auxiliaryMatrix, $auxiliaryTranslate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliaryScaleWithAuxiliarySkew($auxiliaryRotate, $auxiliaryScale, $auxiliarySkew) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliaryScaleWithAuxiliaryTranslate($auxiliaryRotate, $auxiliaryScale, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliaryScaleWithBasicPerspective($auxiliaryRotate, $auxiliaryScale, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliarySkewWithAuxiliaryTranslate($auxiliaryRotate, $auxiliarySkew, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliarySkewWithBasicPerspective($auxiliaryRotate, $auxiliarySkew, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliaryTranslateWithBasicPerspective($auxiliaryRotate, $auxiliaryTranslate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryScaleWithAuxiliarySkewWithAuxiliaryTranslate($auxiliaryScale, $auxiliarySkew, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryScaleWithAuxiliarySkewWithBasicPerspective($auxiliaryScale, $auxiliarySkew, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryScaleWithAuxiliaryTranslateWithBasicPerspective($auxiliaryScale, $auxiliaryTranslate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliarySkewWithAuxiliaryTranslateWithBasicPerspective($auxiliarySkew, $auxiliaryTranslate, $basicPerspective) {
        $instance = new parent("transform", $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliaryScaleWithAuxiliarySkew($auxiliaryMatrix, $auxiliaryRotate, $auxiliaryScale, $auxiliarySkew) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliaryScaleWithAuxiliaryTranslate($auxiliaryMatrix, $auxiliaryRotate, $auxiliaryScale, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliaryScaleWithBasicPerspective($auxiliaryMatrix, $auxiliaryRotate, $auxiliaryScale, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliarySkewWithAuxiliaryTranslate($auxiliaryMatrix, $auxiliaryRotate, $auxiliarySkew, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }

    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliarySkewWithBasicPerspective($auxiliaryMatrix, $auxiliaryRotate, $auxiliarySkew, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliaryTranslateWithBasicPerspective($auxiliaryMatrix, $auxiliaryRotate, $auxiliaryTranslate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryScaleWithAuxiliarySkewWithAuxiliaryTranslate($auxiliaryMatrix, $auxiliaryScale, $auxiliarySkew, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryScaleWithAuxiliarySkewWithBasicPerspective($auxiliaryMatrix, $auxiliaryScale, $auxiliarySkew, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryScale->stringAuxiliaryRScale(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryScaleWithAuxiliaryTranslateWithBasicPerspective($auxiliaryMatrix, $auxiliaryScale, $auxiliaryTranslate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliarySkewWithAuxiliaryTranslateWithBasicPerspective($auxiliaryMatrix, $auxiliarySkew, $auxiliaryTranslate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliaryScaleWithAuxiliarySkewWithAuxiliaryTranslate($auxiliaryRotate, $auxiliaryScale, $auxiliarySkew , $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliaryScaleWithAuxiliarySkewWithBasicPerspective($auxiliaryRotate, $auxiliaryScale, $auxiliarySkew , $basicPerspective) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliaryScaleWithAuxiliaryTranslateWithBasicPerspective($auxiliaryRotate, $auxiliaryScale, $auxiliaryTranslate , $basicPerspective) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliarySkewWithAuxiliaryTranslateWithBasicPerspective($auxiliaryRotate, $auxiliarySkew, $auxiliaryTranslate , $basicPerspective) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryScaleWithAuxiliarySkewWithAuxiliaryTranslateWithBasicPerspective($auxiliaryScale, $auxiliarySkew, $auxiliaryTranslate , $basicPerspective) {
        $instance = new parent("transform", $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliaryScaleWithAuxiliarySkewWithAuxiliaryTranslate($auxiliaryMatrix, $auxiliaryRotate, $auxiliaryScale, $auxiliarySkew, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliaryScaleWithAuxiliarySkewWithBasicPerspective($auxiliaryMatrix, $auxiliaryRotate, $auxiliaryScale, $auxiliarySkew, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliaryScaleWithAuxiliaryTranslateWithBasicPerspective($auxiliaryMatrix, $auxiliaryRotate, $auxiliaryScale, $auxiliaryTranslate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliarySkewWithAuxiliaryTranslateWithBasicPerspective($auxiliaryMatrix, $auxiliaryRotate, $auxiliarySkew, $auxiliaryTranslate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryScaleWithAuxiliarySkewWithAuxiliaryTranslateWithBasicPerspective($auxiliaryMatrix, $auxiliaryScale, $auxiliarySkew, $auxiliaryTranslate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliaryScaleWithAuxiliarySkewWithAuxiliaryTranslateWithBasicPerspective($auxiliaryRotate, $auxiliaryScale, $auxiliarySkew, $auxiliaryTranslate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliaryScaleWithAuxiliarySkewWithAuxiliaryTranslateWithBasicPerspective($auxiliaryMatrix, $auxiliaryRotate, $auxiliaryScale, $auxiliarySkew, $auxiliaryTranslate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    
    public function stringDeclaration() {
        $stringFullDeclaration = "";
        $arrayStringBrowserPrefix = BrowserDiffer::getInstance()->getArrayStringBrowserPrefix();
        foreach ($arrayStringBrowserPrefix as &$stringBrowserPrefix) {
            $stringFullDeclaration = $stringFullDeclaration . $stringBrowserPrefix . $this->stringProperty . ":" . $this->stringValue . ";";
        }
        return $stringFullDeclaration;
    }
    
}
