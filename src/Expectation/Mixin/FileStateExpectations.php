<?php

namespace PHPKitchen\CodeSpecsCore\Expectation\Mixin;

/**
 * Represents
 *
 * @method \PHPKitchen\CodeSpecsCore\Expectation\Internal\Assert startStep($stepName)
 *
 * @package PHPKitchen\CodeSpecsCore\Matchers\Mixins
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
trait FileStateExpectations {
    abstract public function isExist();

    abstract public function isNotExist();

    public function isReadable() {
        $this->isExist();
        $this->startStep('is readable')->assertIsReadable();
        return $this;
    }

    public function isNotReadable() {
        $this->isExist();
        $this->startStep('is not readable')->assertNotIsReadable();
        return $this;
    }

    public function isWritable() {
        $this->isExist();
        $this->startStep('is writable')->assertIsWritable();
        return $this;
    }

    public function isNotWritable() {
        $this->isExist();
        $this->startStep('is not writable')->assertNotIsWritable();
        return $this;
    }
}