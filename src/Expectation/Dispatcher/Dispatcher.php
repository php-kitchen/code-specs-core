<?php

namespace PHPKitchen\CodeSpecsCore\Expectation\Dispatcher;

use PHPKitchen\CodeSpecsCore\Contract\ExpectationMatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Internal\Assert;
use PHPKitchen\CodeSpecsCore\Expectation\Internal\StepsList;
use PHPKitchen\CodeSpecsCore\Expectation\Matcher\ArrayMatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Matcher\BooleanMatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Matcher\ClassMatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Matcher\DirectoryMatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Matcher\FileMatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Matcher\NumberMatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Matcher\ObjectMatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Matcher\StringMatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Matcher\ValueMatcher;
use PHPUnit\Framework\Test;

/**
 * Represents matchers dispatcher.
 *
 * Required to dispatch asserts to specific matchers.
 *
 * @package PHPKitchen\CodeSpecsCore\Expectation
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
class Dispatcher {
    /**
     * @var mixed actual value or variable that will be matched to expectations.
     */
    protected $actual;
    /**
     * @var \PHPUnit\Framework\Test
     */
    protected $test;
    /**
     * @var string description of expectation. If expectation fails this description will be displayed in console.
     */
    protected $variableName;
    protected $useDelayedAsserts = false;

    public function __construct(Test $test, $actual, $variableName = '') {
        $this->test = $test;
        $this->actual = $actual;
        $this->variableName = $variableName;
        $this->init();
    }

    /**
     * Override this method if you want to initialize anything after constructor.
     */
    protected function init(): void {
    }

    public function isMixed(): ValueMatcher {
        return $this->createMatcher(ValueMatcher::class, 'value');
    }

    public function isString(): StringMatcher {
        return $this->createMatcher(StringMatcher::class, 'boolean');
    }

    public function isArray(): ArrayMatcher {
        return $this->createMatcher(ArrayMatcher::class, 'array');
    }

    public function isBoolean(): BooleanMatcher {
        return $this->createMatcher(BooleanMatcher::class, 'boolean');
    }

    public function isNumber(): NumberMatcher {
        return $this->createMatcher(NumberMatcher::class, 'number');
    }

    public function isObject(): ObjectMatcher {
        return $this->createMatcher(ObjectMatcher::class, 'object');
    }

    public function isClass(): ClassMatcher {
        return $this->createMatcher(ClassMatcher::class, 'class');
    }

    public function isFile(): FileMatcher {
        return $this->createMatcher(FileMatcher::class, 'file');
    }

    public function isDirectory(): DirectoryMatcher {
        return $this->createMatcher(DirectoryMatcher::class, 'directory');
    }

    protected function createMatcher($className, $id): ExpectationMatcher {
        $variableName = $this->variableName ?: $id;

        $stepsList = StepsList::getInstance();
        $assert = new Assert($stepsList, $this->test, $this->actual, "I see that {$variableName}");

        if ($this->useDelayedAsserts) {
            $assert->switchToDelayedExecutionStrategy();
        }
        return new $className($assert);
    }
}