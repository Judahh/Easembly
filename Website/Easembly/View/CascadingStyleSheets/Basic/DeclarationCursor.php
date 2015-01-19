<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationCursor
 *
 * @author Silvio
 */
class DeclarationCursor extends Declaration {

//Constructor
//   instantiation: 
//      $declaration = DeclarationCursor::DeclarationCursorStringValue($stringValue);
    public static function DeclarationCursorWithStringValue($stringValue) {
        $instance = new parent("cursor", $stringValue);
        return $instance;
    }

    public static function DeclarationCursorWithBasicUniformResourceLocatorWithStringValue($basicUniformResourceLocator, $stringValue) {
        $instance = new parent("cursor", $basicUniformResourceLocator->stringBasicUniformResourceLocator().",".$stringValue); //arrumar
        return $instance;
    }

    public static function stringValueAlias() {
        return "alias";
    }

    public static function stringValueAllScroll() {
        return "all-scroll";
    }

    public static function stringValueAuto() {
        return "auto";
    }

    public static function stringValueCell() {
        return "cell";
    }

    public static function stringValueContextMenu() {
        return "context-menu";
    }

    public static function stringValueColResize() {
        return "col-resize";
    }

    public static function stringValueCopy() {
        return "copy";
    }

    public static function stringValueCrossair() {
        return "crossair";
    }

    public static function stringValueDefault() {
        return "default";
    }

    public static function stringValueEResize() {
        return "e-resize";
    }

    public static function stringValueEwResize() {
        return "ew-resize";
    }

    public static function stringValueHelp() {
        return "help";
    }

    public static function stringValueMove() {
        return "move";
    }

    public static function stringValueNResize() {
        return "n-resize";
    }

    public static function stringValueNeResize() {
        return "ne-resize";
    }

    public static function stringValueNeswResize() {
        return "nesw-resize";
    }

    public static function stringValueNsResize() {
        return "ns-resize";
    }

    public static function stringValueNwResize() {
        return "nw-resize";
    }

    public static function stringValueNwseResize() {
        return "nwse-resize";
    }

    public static function stringValueNoDrop() {
        return "no-drop";
    }

    public static function stringValueNone() {
        return "none";
    }

    public static function stringValueNotAllowed() {
        return "not-allowed";
    }

    public static function stringValuePointer() {
        return "pointer";
    }

    public static function stringValueProgress() {
        return "progress";
    }

    public static function stringValueRowResize() {
        return "row-resize";
    }

    public static function stringValueSResize() {
        return "s-resize";
    }

    public static function stringValueSeResize() {
        return "se-resize";
    }

    public static function stringValueSwResize() {
        return "sw-resize";
    }

    public static function stringValueText() {
        return "text";
    }

    public static function stringValueVerticalText() {
        return "vertical-text";
    }

    public static function stringValueWResize() {
        return "w-resize";
    }

    public static function stringValueWait() {
        return "wait";
    }

    public static function stringValueZoomIn() {
        return "zoom-in";
    }

    public static function stringValueZoomOut() {
        return "zoom-out";
    }

}
