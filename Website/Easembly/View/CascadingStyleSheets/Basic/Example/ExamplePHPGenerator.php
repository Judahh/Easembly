<html>
    <head>
        <title>Online PHP Script Execution</title>

        <?php

            class Attribute {//TODO: terminar de testar

                private $stringAttribute;
                private $stringValue;
                private $stringValueRelation;

                //[attribute]
                //[attribute=value]
                //[attribute~=value]
                //[attribute|=value]
                //[attribute^=value]
                //[attribute$=value]
                //[attribute*=value]

                private function __construct($stringAttribute, $stringValue) {
                    $this->stringAttribute = $stringAttribute;
                    $this->stringValue = $stringValue;
                }

                //Constructors
                //   instantiation: 
                //      $attribute = Attribute::AttributeWithStringAttribute($stringAttribute);
                //      $attribute = Attribute::AttributeWithStringAttributeWithStringValue($stringAttribute, $stringValue);
                public static function AttributeWithStringAttribute($stringAttribute) {
                    $instance = new self($stringAttribute, "");
                    return $instance;
                }

                public static function AttributeWithStringAttributeWithStringValue($stringAttribute, $stringValue) {
                    $instance = new self($stringAttribute, "=\"" . $stringValue . "\"");
                    return $instance;
                }

                public function setStringValueRelationWithStringValueRelation($stringValueRelation) {
                    $this->stringValueRelation = $stringValueRelation;
                }

                public function __toString() {
                    return $this->stringAttribute();
                }

                public function stringAttribute() {
                    return "[" . $this->stringAttribute . $this->stringValueRelation . $this->stringValue . "]";
                }

            }
            
        ?>

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
                    $instance = new self($stringProperty, ":" . $stringValue);
                    return $instance;
                }

                public function __toString() {
                    return $this->stringDeclaration();
                }

                public function stringDeclaration() {
                    return $this->stringProperty . $this->stringValue . ";";
                }

            }
            
        ?>

        <?php

            class DeclarationColor extends Declaration {

                //Constructor
                //   instantiation: 
                //      $declaration = DeclarationColor::DeclarationWithStringHexColorValue($stringHexColorValue);
                public static function DeclarationWithStringHexColorValue($stringHexColorValue) {
                    $instance = new parent("color", ":" . $stringHexColorValue); //arrumar
                    return $instance;
                }

            }
            
        ?>

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
                //      $multipleSelector = MultipleSelector::MultipleSelectorWithListSelector($listSelector);
                //      $multipleSelector = MultipleSelector::MultipleSelectorWithListSelectorWithListDeclaration($listSelector, $listDeclaration);
                public static function MultipleSelectorWithListSelector($arraySelector) {
                    $instance = new self($arraySelector, array());
                    return $instance;
                }

                public static function MultipleSelectorWithListSelectorWithListDeclaration($arraySelector, $arrayDeclaration) {
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
    <style>
      <?php
        $selector = Selector::SelectorWithStringName("a");
        $attribute = Attribute::AttributeWithStringAttribute("target");
        $selector->setAttributeWithAttribute($attribute);
        $declaration = Declaration::DeclarationWithStringPropertyWithStringValue("background-color", "yellow");
        $selector->addDeclarationWithDeclaration($declaration);
        echo $selector->stringSelector();
      ?>
    </style>

    </head>
    <body>
    
        <p>The links with a target attribute gets a yellow background:</p>

        <a href="http://www.w3schools.com">w3schools.com</a>
        <a href="http://www.disney.com" target="_blank">disney.com</a>
        <a href="http://www.wikipedia.org" target="_top">wikipedia.org</a>

        <p><b>Note:</b> For [<i>attribute</i>] to work in IE8 and earlier, a DOCTYPE must be declared.</p>
    </body>
</html>