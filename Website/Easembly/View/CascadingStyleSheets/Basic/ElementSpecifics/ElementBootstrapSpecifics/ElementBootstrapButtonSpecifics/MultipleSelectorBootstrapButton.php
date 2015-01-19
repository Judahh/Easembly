<?php
/**
 * Description of MultipleSelectorBootstrapButton
 *
 * @author Judah
 */
class MultipleSelectorBootstrapButton extends Selector {
    public static function MultipleSelectorBootstrapButton() {
        $instance = new parent($arraySelector, array());
        $selectorBootstrapButtonBtn = SelectorBootstrapButtonBtn::SelectorBootstrapButtonBtn();
        addSelectorWithSelector($selectorBootstrapButtonBtn);
        $selectorBootstrapButtonDotBtn = SelectorBootstrapButtonBtn::SelectorBootstrapButtonDotBtn();
        addSelectorWithSelector($selectorBootstrapButtonDotBtn);
        return $instance;
    }
}

?>
