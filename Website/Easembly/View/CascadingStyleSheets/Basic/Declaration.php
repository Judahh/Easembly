<?php

class Declaration {//TODO: terminar de testar

    private $stringProperty;
    private $stringValue;

    private function __construct($stringProperty, $stringValue) {
        $this->stringProperty = $stringProperty;
        $this->stringValue = $stringValue;
    }

    //Constructor
    //   instantiation: 
    //      $declaration = Declaration::DeclarationWithStringPropertyWithStringValue($stringProperty, $stringValue);
    public static function DeclarationWithStringPropertyWithStringValue($stringProperty, $stringValue) {
        $instance = new self($stringProperty, $stringValue);
        return $instance;
    }

    public function __toString() {
        return $this->stringDeclaration();
    }

    public function stringDeclaration() {
        return $this->stringProperty . ":" . $this->stringValue . ";";
    }

    public function getStringProperty() {
        return $this->stringProperty;
    }
    
    public function getStringValue() {
        return $this->stringValue;
    }
    
    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }
}

?>