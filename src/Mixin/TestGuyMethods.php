<?php

namespace PHPKitchen\CodeSpecsCore\Mixin;

use PHPKitchen\CodeSpecsCore\Contract\TestGuy;
use PHPKitchen\CodeSpecsCore\Directive\Wait;
use PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\DelayedDispatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\Dispatcher;
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

/**
 * Represents
 *
 * @package PHPKitchen\CodeSpecsCore\Mixins
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
trait TestGuyMethods {
    /**
     * @var StepsList
     */
    private $steps;
    /**
     * @var \PHPUnit\Framework\Test
     */
    private $context;
    protected $variableName = '';
    //region ----------------------- SPECIFICATION METHODS -----------------------

    public function init() {
        $this->steps = StepsList::getInstance();
    }

    /**
     * @param $scenario
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     */
    public function describe(string $scenario): TestGuy {
        $this->steps->add('I describe ' . $scenario);
        return $this;
    }

    /**
     * @param $expectation
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     */
    public function expectThat(string $expectation): TestGuy {
        $this->steps->add('I expect that ' . $expectation);

        return $this;
    }

    /**
     * @param $expectation
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     */
    public function expectTo(string $expectation): TestGuy {
        $this->steps->add('I expect to ' . $expectation);
        return $this;
    }

    /**
     * @param $expectation
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     */
    public function verifyThat(string $expectation, callable $verificationSteps = null): TestGuy {
        $this->steps->add('I verify that ' . $expectation);
        if ($verificationSteps) {
            $verificationSteps($this);
        }

        return $this;
    }

    /**
     * @param $variableName
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\DelayedDispatcher
     */
    public function match(string $variableName): DelayedDispatcher {
        $this->variableName = $variableName;
        return $this->createDispatcher(DelayedDispatcher::class, null);
    }

    /**
     * @param $variableName
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\DelayedDispatcher
     */
    public function lookAt(string $variableName): TestGuy {
        $this->variableName = $variableName;
        return $this;
    }

    /**
     * @param $numberOfTimeUnits
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     */
    public function wait($numberOfTimeUnits): Wait {
        return new Wait($numberOfTimeUnits, $this->steps);
    }

    /**
     * @param $variable
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\Dispatcher
     */
    public function see($variable): ValueMatcher {
        return $this->dispatch($variable)->isValueOf();
    }

    /**
     * @param string $string variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\StringMatcher
     */
    public function seeString($string): StringMatcher {
        return $this->dispatch($string)->isString();
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param array|\ArrayAccess $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ArrayMatcher
     */
    public function seeArray($variable): ArrayMatcher {
        return $this->dispatch($variable)->isArray();
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param boolean $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\BooleanMatcher
     */
    public function seeBool($variable): BooleanMatcher {
        return $this->dispatch($variable)->isBoolean();
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param int|float $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\NumberMatcher
     */
    public function seeNumber($variable): NumberMatcher {
        return $this->dispatch($variable)->isNumber();
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param object $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ObjectMatcher
     */
    public function seeObject($variable): ObjectMatcher {
        return $this->dispatch($variable)->isObject();
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ClassMatcher
     */
    public function seeClass($variable): ClassMatcher {
        return $this->dispatch($variable)->isClass();
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\FileMatcher
     */
    public function seeFile($variable): FileMatcher {
        return $this->dispatch($variable)->isFile();
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\DirectoryMatcher
     */
    public function seeDirectory($variable): DirectoryMatcher {
        return $this->dispatch($variable)->isDirectory();
    }



    //endregion

    //region ----------------------- UTIL METHODS -----------------------

    public function clearSteps() {
        $this->steps->clear();
    }

    private function dispatch($actualValue): Dispatcher {
        return $this->createDispatcher(Dispatcher::class, $actualValue);
    }

    private function createDispatcher($class, $actualValue): Dispatcher {
        $dispatcher = new $class($this, $this->context, $actualValue, $this->variableName);
        $this->variableName = '';
        return $dispatcher;
    }
    //endregion
}