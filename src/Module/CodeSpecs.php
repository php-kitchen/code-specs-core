<?php

namespace PHPKitchen\CodeSpecsCore\Module;

use Codeception\Module;
use Codeception\TestInterface;
use PHPKitchen\CodeSpecsCore\Contract\ExpectationMatcher;
use PHPKitchen\CodeSpecsCore\Contract\TestGuy;
use PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\DelayedDispatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\Dispatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Internal\Assert;
use PHPKitchen\CodeSpecsCore\Expectation\Internal\Step;
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
 * Represents a Codeception module that add a bunch of cool methods to "Actor" for unit testing
 * and show a way of representing unit tests as a behavior specifications of a specific class
 * and a test of specific method as a specification of the method.
 *
 * @package PHPKitchen\CodeSpecsCore
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
class CodeSpecs extends Module implements TestGuy {
    /**
     * @var Step[]
     */
    private $steps = [];
    /**
     * @var TestInterface
     */
    private $context;
    private $variableName = '';
    //region ----------------------- SPECIFICATION METHODS -----------------------

    /**
     * @param $scenario
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     */
    public function describe(string $scenario): self {
        $this->_addStep('I describe ' . $scenario);
        return $this;
    }

    /**
     * @param $expectation
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     */
    public function expectThat(string $expectation): self {
        $this->_addStep('I expect that ' . $expectation);

        return $this;
    }

    /**
     * @param $expectation
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     */
    public function expectTo(string $expectation): self {
        $this->_addStep('I expect to ' . $expectation);
        return $this;
    }

    /**
     * @param $expectation
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     */
    public function verifyThat(string $expectation): self {
        $this->_addStep('I verify that ' . $expectation);
        return $this;
    }

    /**
     * @param $variable
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\Dispatcher
     */
    public function seeThat($variable): Dispatcher {
        return $this->createDispatcher(Dispatcher::class, $variable);
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
    public function lookAt(string $variableName): self {
        $this->variableName = $variableName;
        return $this;
    }

    /**
     * @param $numberOfTimeUnits
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     */
    public function wait($numberOfTimeUnits): self {
        $this->_addStep("I wait {$numberOfTimeUnits}");
        return $this;
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param mixed $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ValueMatcher
     */
    public function seeThatValueOf(...$params): ValueMatcher {
        return $this->createMatcher(ValueMatcher::class, 'value', $params);
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\StringMatcher
     */
    public function seeThatString(...$params): StringMatcher {
        return $this->createMatcher(StringMatcher::class, 'boolean', $params);
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param array|\ArrayAccess $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ArrayMatcher
     */
    public function seeThatArray(...$params): ArrayMatcher {
        return $this->createMatcher(ArrayMatcher::class, 'array', $params);
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param boolean $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\BooleanMatcher
     */
    public function seeThatBoolean(...$params): BooleanMatcher {
        return $this->createMatcher(BooleanMatcher::class, 'boolean', $params);
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param int|float $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\NumberMatcher
     */
    public function seeThatNumber(...$params): NumberMatcher {
        return $this->createMatcher(NumberMatcher::class, 'number', $params);
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param object $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ObjectMatcher
     */
    public function seeThatObject(...$params): ObjectMatcher {
        return $this->createMatcher(ObjectMatcher::class, 'object', $params);
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ClassMatcher
     */
    public function seeThatClass(...$params): ClassMatcher {
        return $this->createMatcher(ClassMatcher::class, 'class', $params);
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\FileMatcher
     */
    public function seeThatFile(...$params): FileMatcher {
        return $this->createMatcher(FileMatcher::class, 'file', $params);
    }

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\DirectoryMatcher
     */
    public function seeThatDirectory(...$params): DirectoryMatcher {
        return $this->createMatcher(DirectoryMatcher::class, 'directory', $params);
    }

    protected function createMatcher($className, $id, $params): ExpectationMatcher {
        [$variableName, $variable] = $this->parseVariableAndNameFromParams($params, $id);

        $assert = new Assert($this, $this->context, $variable, "I see that {$variableName}");
        return new $className($assert);
    }

    protected function parseVariableAndNameFromParams($params, $variableDefaultName): array {
        if (count($params) >= 2) {
            [$variableName, $variable] = $params;
        } elseif (count($params) == 1) {
            $variable = $params[0];
            $variableName = $variableDefaultName;
        } else {
            throw new \InvalidArgumentException();
        }
        return [$variableName, $variable];
    }

    //endregion

    //region ----------------------- UTIL METHODS -----------------------

    public function _addStep($step) {
        $lastStep = end($this->steps);
        if ($lastStep) {
            $lastStep->check();
        }
        $this->steps[] = new Step($step);
    }

    public function _getStepsListAsString(): string {
        $message = implode(PHP_EOL, $this->steps);
        $message = $message ? $message . PHP_EOL : $message;
        return (string)$message;
    }

    public function _getContext(): TestInterface {
        return $this->context;
    }

    public function _before(TestInterface $test) {
        $this->context = $test;
        parent::_before($test);
    }

    public function _after(TestInterface $test) {
        $this->clearHistory();
        parent::_after($test);
    }

    private function clearHistory() {
        $this->steps = [];
    }

    private function createDispatcher($class, $actualValue): Dispatcher {
        $dispatcher = new $class($this, $this->context, $actualValue, $this->variableName);
        $this->variableName = '';
        return $dispatcher;
    }
    //endregion
}