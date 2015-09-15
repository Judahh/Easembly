<?php
/**
 * Description of Element
 *
 * @author Judah
 */
class ElementBootstrapButton extends Element {
    public static function ElementBootstrapButton() {
        $instance = new parent(array());
        $multipleSelectorBootstrapButtonBtn =  MultipleSelectorBootstrapButtonBtn::MultipleSelectorBootstrapButtonBtn();
        addMultipleSelectorWithMultipleSelector($multipleSelectorBootstrapButtonBtn);
        return $instance;
    }
}
