<?php

namespace PHPKitchen\CodeSpecsCore\Expectation\Matcher\Base;

use PHPKitchen\CodeSpecsCore\Contract\ExpectationMatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Internal\Assert;

/**
 * Matcher is a base class for all of the expectation matchers.
 *
 * @package PHPKitchen\CodeSpecsCore\Base
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
abstract class Matcher implements ExpectationMatcher {
    private $assert;

    public function __construct(Assert $assert) {
        $this->assert = $assert;
    }

    public function __clone() {
        $this->assert = clone $this->assert;
    }

    protected function startStep($stepName) {
        $this->assert->changeCurrentStepTo($stepName);
        return $this->assert;
    }

    public function __invoke($actualValue) {
        $newMatcher = clone $this;

        $newMatcher->assert->switchToInTimeExecutionStrategy();
        $newMatcher->assert->runStepsWithActualValue($actualValue);
        return $newMatcher;
    }

    protected function createInternalMatcherWithDescription($matcherClass, $description) {
        $assert = clone $this->assert;
        $assert->changeDescriptionTo($description);
        return new $matcherClass($assert);
    }

    protected function getActualValue() {
        return $this->assert->getActualValue();
    }
}