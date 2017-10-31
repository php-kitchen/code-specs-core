<?php

namespace PHPKitchen\CodeSpecsCore\Expectation\Internal;

/**
 * Represents
 *
 * @package PHPKitchen\CodeSpecsCore\Module
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
class Step {
    private $name;
    private $checked = false;

    public function __construct($name) {
        $this->name = $name;
    }

    public function check() {
        $this->checked = true;
    }

    public function __toString() {
        return $this->toString();
    }

    public function toString() {
        $stepResult = $this->isChecked() ? "\u{2713} " : '- ';
        return $stepResult . $this->name;
    }

    protected function isChecked() {
        return $this->checked;
    }
}