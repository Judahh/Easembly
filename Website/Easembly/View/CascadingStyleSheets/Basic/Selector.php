<?php

    class Selector {//TODO: terminar de testar e colocar includes: Declaration e Attribute

       private $stringName;
       private $stringType;
       private $stringClassElement;
       private $stringPseudoClass;
       private $stringPseudoElement;
       private $attribute;
       private $arrayDeclaration;

       private function __construct($stringName, $stringType, $stringClassElement) {
          $this->stringName = $stringName;
          $this->stringType = $stringType;
          $this->stringClassElement = $stringClassElement;
          $this->stringPseudoClass = "";
          $this->stringPseudoElement = "";
          $this->attribute = "";
          $this->arrayDeclaration = array();
       }

       // ver attribute
       
       //Constructors
       //   instantiation: 
       //      $selector = Selector::SelectorWithStringName($stringName);
       //      $selector = Selector::SelectorWithStringNameWithStringType($stringName, $stringType);
       //      $selector = Selector::SelectorWithStringNameWithStringClassElement($stringName, $stringClassElement);
       //      $selector = Selector::SelectorWithStringNameWithStringTypeWithStringClassElement($stringName, $stringType, $stringClassElement);
       public static function SelectorWithStringName($stringName) {
          $instance = new self($stringName, "", "");
          return $instance;
       }

       public static function SelectorWithStringNameWithStringType($stringName, $stringType) {
          $instance = new self($stringName, $stringType, "");
          return $instance;
       }

       public static function SelectorWithStringNameWithStringClassElement($stringName, $stringClassElement) {
          $instance = new self($stringName, ".", $stringClassElement);
          return $instance;
       }

       public static function SelectorWithStringNameWithStringTypeWithStringClassElement($stringName, $stringType, $stringClassElement) {
          $instance = new self($stringName, $stringType, $stringClassElement);
          return $instance;
       }

       public function setStringPseudoElementWithString($string) {
          $this->stringPseudoElement = "::" . $string;
       }
       
       public function setStringPseudoClassWithString($string) {
          $this->stringPseudoClass = ":" . $string;
       }

       public function setAttributeWithAttribute($attribute) {
          $this->attribute = $attribute;
       }

       public function addDeclarationWithDeclaration($declaration) {
          array_push($this->arrayDeclaration, $declaration);
       }

       public function __toString() {
          return $this->stringSelector();
       }

       public function stringBasicSelector() {
          return $this->stringClassElement . $this->stringType . $this->stringName . $this->attribute->stringAttribute() . $this->stringPseudoElement . $this->stringPseudoClass;
       }

       public function stringSelector() {
          $stringSelector = $this->stringBasicSelector() . "{";
          foreach ($this->arrayDeclaration as &$declaration) {
             $stringSelector = $stringSelector . $declaration->stringDeclaration();
          }
          $stringSelector = $stringSelector . "}";
          unset($declaration);
          return $stringSelector;
       }

    }

?>