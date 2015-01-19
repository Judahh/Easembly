<?php
    class SelectorBootstrapButtonBtn extends Selector {
       public static function SelectorBootstrapButtonDotBtn() {
          $instance = new parent("btn", ".", "");
          addDeclarationWithDeclaration(DeclarationDisplay::DeclarationDisplayWithStringValue(DeclarationDisplay::stringValueInlineBlock()));
          
          $basicSimpleLengthTopAndBottomParts = BasicSimpleLength::BasicSimpleLengthWithFloatSimpleLengthPixel(6);
          $basicSimpleLengthRightAndLeftParts = BasicSimpleLength::BasicSimpleLengthWithFloatSimpleLengthPixel(12);
          
          $basicLengthTopAndBottomParts=BasicLength::BasicLengthWithBasicSimpleLength($basicSimpleLengthTopAndBottomParts);
          $basicLengthRightAndLeftParts=BasicLength::BasicLengthWithBasicSimpleLength($basicSimpleLengthRightAndLeftParts);
          
          $basicFourPartsLength = BasicFourPartsLength::BasicFourPartsLengthWithBasicLengthTopAndBottomPartsWithBasicLengthRightAndLeftParts($basicLengthTopAndBottomParts, $basicLengthRightAndLeftParts);
          addDeclarationWithDeclaration(DeclarationPadding::DeclarationPaddingWithBasicFourPartsLength($basicFourPartsLength));
          
          addDeclarationWithDeclaration(DeclarationMargin::DeclarationMarginBottomWithBasicLength());
          return $instance;
       }
       
       public static function SelectorBootstrapButtonBtn() {
          $instance = new parent("btn", "", "");
          return $instance;
       }
    }
 
?>