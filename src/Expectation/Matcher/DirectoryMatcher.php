<?php

namespace PHPKitchen\CodeSpecsCore\Expectation\Matcher;

use PHPKitchen\CodeSpecsCore\Expectation\Matcher\Base\Matcher;
use PHPKitchen\CodeSpecsCore\Expectation\Mixin\FileStateExpectations;

/**
 * DirectoryMatcher is designed to check given directory matches expectation.
 *
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
class DirectoryMatcher extends Matcher {
    use FileStateExpectations;

    /**
     * @return $this
     */
    public function isExist() {
        $this->startStep('is exist')
            ->assertDirectoryExists();
        return $this;
    }

    /**
     * @return $this
     */
    public function isNotExist() {
        $this->startStep('is not exist')
            ->assertDirectoryNotExists();
        return $this;
    }
}