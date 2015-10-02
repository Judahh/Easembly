<?php

/**
 * Description of BasicPerspective
 *
 * @author Judah
 */

class BasicPerspective {
    private $stringPerspective;

    private function __construct($stringPerspective) {
        $this->stringPerspective = $stringPerspective;
    }

    public static function BasicPerspectiveWithBasicSimpleLength($basicSimpleLength) {
        $instance = new self($basicSimpleLength->stringBasicSimpleLength());
        return $instance;
    }

    public function stringBasicPerspective() {
        return "perspective(".$this->stringPerspective.")";
    }
}
