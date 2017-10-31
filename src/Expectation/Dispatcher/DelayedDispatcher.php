<?php

namespace PHPKitchen\CodeSpecsCore\Expectation\Dispatcher;

/**
 * Represents
 *
 * @package PHPKitchen\CodeSpecsCore\Expectation\Dispatchers
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
class DelayedDispatcher extends Dispatcher {
    protected function init():void {
        $this->useDelayedAsserts = true;
    }
}