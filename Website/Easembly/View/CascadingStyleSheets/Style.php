<?php
namespace View\CascadingStyleSheets\Common;


class Style {
    protected function __construct() {
    }

    public static function Style() {
        $instance = new self();
        return $instance;
    }
} 