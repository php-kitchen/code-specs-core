<?php

namespace PHPKitchen\CodeSpecsCore\Contract;

use PHPKitchen\CodeSpecsCore\Expectation\Internal\Assert;

/**
 * Represents object designed to check actual value of variable matches expected.
 *
 * @package PHPKitchen\CodeSpecsCore\Expectation
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
interface ExpectationMatcher {
    public function __construct(Assert $assert);
}