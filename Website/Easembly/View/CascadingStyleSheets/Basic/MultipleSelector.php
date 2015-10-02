<?php

    class MultipleSelector {//TODO: terminar de testar e colocar include: Selector

       private $arraySelector;
       private $arrayDeclaration;

       private function __construct($arraySelector, $arrayDeclaration) {
          $this->arraySelector = $arraySelector;
          $this->arrayDeclaration = $arrayDeclaration;
       }

       //Constructors
       //   instantiation: 
       //      $multipleSelector = MultipleSelector::MultipleSelectorWithArraySelector($listSelector);
       //      $multipleSelector = MultipleSelector::MultipleSelectorWithArraySelectorWithArrayDeclaration($listSelector, $listDeclaration);
       public static function MultipleSelectorWithArraySelector($arraySelector) {
          $instance = new self($arraySelector, array());
          return $instance;
       }

       public static function MultipleSelectorWithArraySelectorWithArrayDeclaration($arraySelector, $arrayDeclaration) {
          $instance = new self($arraySelector, $arrayDeclaration);
          return $instance;
       }

       public function addDeclarationWithDeclaration($declaration) {
          array_push($this->arrayDeclaration, $declaration);
       }

       public function addSelectorWithSelector($selector) {
          array_push($this->arraySelector, $selector);
       }

       public function __toString() {
          return $this->stringSelector();
       }

       public function stringBasicSelector() {
          $stringSelector = "";
          foreach ($this->arraySelector as &$selectorItem) {
             if (empty($stringSelector)) {
                $stringSelector = $selectorItem->stringSelector();
             } else {
                $stringSelector = $stringSelector . "," . $selectorItem->stringSelector();
             }
          }
          unset($selectorItem);
          return $stringSelector;
       }

       public function stringSelector() {
          $stringSelector = $this->stringBasicSelector() . "{";
          foreach ($this->arrayDeclaration as &$declaration) {
             $stringSelector = $stringSelector . $declaration->stringDeclaration();
          }
          unset($declaration);
          $stringSelector = $stringSelector . "}";

          return $stringSelector;
       }

    }
?>