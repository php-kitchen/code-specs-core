<?php //[STAMP] 6180cc62265d0727370e578c4e77230f
namespace _generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

trait UnitTesterActions {
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are equal. If you're comparing floating-point values,
     * you can specify the optional "delta" parameter which dictates how great of a precision
     * error are you willing to tolerate in order to consider the two values equal.
     *
     * Regular example:
     * ```php
     * <?php
     * $I->assertEquals($element->getChildrenCount(), 5);
     * ```
     *
     * Floating-point example:
     * ```php
     * <?php
     * $I->assertEquals($calculator->add(0.1, 0.2), 0.3, 'Calculator should add the two numbers correctly.', 0.01);
     * ```
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @param float $delta
     * @see \Codeception\Module\Asserts::assertEquals()
     */
    public function assertEquals($expected, $actual, $message = null, $delta = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertEquals', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are not equal. If you're comparing floating-point values,
     * you can specify the optional "delta" parameter which dictates how great of a precision
     * error are you willing to tolerate in order to consider the two values not equal.
     *
     * Regular example:
     * ```php
     * <?php
     * $I->assertNotEquals($element->getChildrenCount(), 0);
     * ```
     *
     * Floating-point example:
     * ```php
     * <?php
     * $I->assertNotEquals($calculator->add(0.1, 0.2), 0.4, 'Calculator should add the two numbers correctly.', 0.01);
     * ```
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @param float $delta
     * @see \Codeception\Module\Asserts::assertNotEquals()
     */
    public function assertNotEquals($expected, $actual, $message = null, $delta = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotEquals', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are same
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertSame()
     */
    public function assertSame($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertSame', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are not same
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotSame()
     */
    public function assertNotSame($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotSame', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is greater than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertGreaterThan()
     */
    public function assertGreaterThan($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertGreaterThan', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is greater or equal than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertGreaterThanOrEqual()
     */
    public function assertGreaterThanOrEqual($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertGreaterThanOrEqual', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is less than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertLessThan()
     */
    public function assertLessThan($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertLessThan', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is less or equal than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertLessThanOrEqual()
     */
    public function assertLessThanOrEqual($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertLessThanOrEqual', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that haystack contains needle
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     * @see \Codeception\Module\Asserts::assertContains()
     */
    public function assertContains($needle, $haystack, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertContains', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that haystack doesn't contain needle.
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotContains()
     */
    public function assertNotContains($needle, $haystack, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotContains', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that string match with pattern
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     * @see \Codeception\Module\Asserts::assertRegExp()
     */
    public function assertRegExp($pattern, $string, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertRegExp', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that string not match with pattern
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotRegExp()
     */
    public function assertNotRegExp($pattern, $string, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotRegExp', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that a string starts with the given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     * @see \Codeception\Module\Asserts::assertStringStartsWith()
     */
    public function assertStringStartsWith($prefix, $string, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertStringStartsWith', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that a string doesn't start with the given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     * @see \Codeception\Module\Asserts::assertStringStartsNotWith()
     */
    public function assertStringStartsNotWith($prefix, $string, $message = null) {
        return $this->getScenario()
            ->runStep(new \Codeception\Step\Action('assertStringStartsNotWith', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is empty.
     *
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertEmpty()
     */
    public function assertEmpty($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertEmpty', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is not empty.
     *
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotEmpty()
     */
    public function assertNotEmpty($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotEmpty', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is NULL
     *
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNull()
     */
    public function assertNull($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNull', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is not NULL
     *
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotNull()
     */
    public function assertNotNull($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotNull', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that condition is positive.
     *
     * @param        $condition
     * @param string $message
     * @see \Codeception\Module\Asserts::assertTrue()
     */
    public function assertTrue($condition, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertTrue', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that condition is negative.
     *
     * @param        $condition
     * @param string $message
     * @see \Codeception\Module\Asserts::assertFalse()
     */
    public function assertFalse($condition, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertFalse', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file exists
     *
     * @param string $filename
     * @param string $message
     * @see \Codeception\Module\Asserts::assertFileExists()
     */
    public function assertFileExists($filename, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertFileExists', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file doesn't exist
     *
     * @param string $filename
     * @param string $message
     * @see \Codeception\Module\Asserts::assertFileNotExists()
     */
    public function assertFileNotExists($filename, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertFileNotExists', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expected
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertGreaterOrEquals()
     */
    public function assertGreaterOrEquals($expected, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertGreaterOrEquals', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expected
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertLessOrEquals()
     */
    public function assertLessOrEquals($expected, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertLessOrEquals', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertIsEmpty()
     */
    public function assertIsEmpty($actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsEmpty', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $key
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertArrayHasKey()
     */
    public function assertArrayHasKey($key, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertArrayHasKey', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $key
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertArrayNotHasKey()
     */
    public function assertArrayNotHasKey($key, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertArrayNotHasKey', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that array contains subset.
     *
     * @param array $subset
     * @param array $array
     * @param bool $strict
     * @param string $message
     * @see \Codeception\Module::assertArraySubset()
     */
    public function assertArraySubset($subset, $array, $strict = null, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertArraySubset', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expectedCount
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertCount()
     */
    public function assertCount($expectedCount, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertCount', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $class
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertInstanceOf()
     */
    public function assertInstanceOf($class, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertInstanceOf', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $class
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertNotInstanceOf()
     */
    public function assertNotInstanceOf($class, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotInstanceOf', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $type
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertInternalType()
     */
    public function assertInternalType($type, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertInternalType', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Fails the test with message.
     *
     * @param $message
     * @see \Codeception\Module\Asserts::fail()
     */
    public function fail($message) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('fail', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Handles and checks exception called inside callback function.
     * Either exception class name or exception instance should be provided.
     *
     * ```php
     * <?php
     * $I->expectException(MyException::class, function() {
     *     $this->doSomethingBad();
     * });
     *
     * $I->expectException(new MyException(), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     * If you want to check message or exception code, you can pass them with exception instance:
     * ```php
     * <?php
     * // will check that exception MyException is thrown with "Don't do bad things" message
     * $I->expectException(new MyException("Don't do bad things"), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     *
     * @param $exception string or \Exception
     * @param $callback
     * @see \Codeception\Module\Asserts::expectException()
     */
    public function expectException($exception, $callback) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('expectException', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $scenario
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::describe()
     */
    public function describe($scenario) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('describe', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expectation
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::expectThat()
     */
    public function expectThat($expectation) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('expectThat', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expectation
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::expectTo()
     */
    public function expectTo($expectation) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('expectTo', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expectation
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::verifyThat()
     */
    public function verifyThat($expectation) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('verifyThat', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $variable
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\Dispatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThat()
     */
    public function canSeeThat($variable) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeThat', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $variable
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\Dispatcher
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThat()
     */
    public function seeThat($variable) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeThat', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $variableName
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\DelayedDispatcher
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::match()
     */
    public function match($variableName) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('match', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $variableName
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\DelayedDispatcher
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::lookAt()
     */
    public function amGoingToCheck($variableName) {
        return $this->getScenario()->runStep(new \Codeception\Step\Condition('amGoingToCheck', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $numberOfTimeUnits
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::wait()
     */
    public function wait($numberOfTimeUnits) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('wait', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param mixed $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ValueMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatValueOf()
     */
    public function canSeeThatValueOf($params = null) {
        return $this->getScenario()
            ->runStep(new \Codeception\Step\ConditionalAssertion('seeThatValueOf', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param mixed $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ValueMatcher
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatValueOf()
     */
    public function seeThatValueOf($params = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeThatValueOf', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\StringMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatString()
     */
    public function canSeeThatString($params = null) {
        return $this->getScenario()
            ->runStep(new \Codeception\Step\ConditionalAssertion('seeThatString', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\StringMatcher
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatString()
     */
    public function seeThatString($params = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeThatString', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param array|\ArrayAccess $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ArrayMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatArray()
     */
    public function canSeeThatArray($params = null) {
        return $this->getScenario()
            ->runStep(new \Codeception\Step\ConditionalAssertion('seeThatArray', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param array|\ArrayAccess $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ArrayMatcher
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatArray()
     */
    public function seeThatArray($params = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeThatArray', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param boolean $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\BooleanMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatBoolean()
     */
    public function canSeeThatBoolean($params = null) {
        return $this->getScenario()
            ->runStep(new \Codeception\Step\ConditionalAssertion('seeThatBoolean', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param boolean $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\BooleanMatcher
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatBoolean()
     */
    public function seeThatBoolean($params = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeThatBoolean', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param int|float $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\NumberMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatNumber()
     */
    public function canSeeThatNumber($params = null) {
        return $this->getScenario()
            ->runStep(new \Codeception\Step\ConditionalAssertion('seeThatNumber', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param int|float $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\NumberMatcher
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatNumber()
     */
    public function seeThatNumber($params = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeThatNumber', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param object $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ObjectMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatObject()
     */
    public function canSeeThatObject($params = null) {
        return $this->getScenario()
            ->runStep(new \Codeception\Step\ConditionalAssertion('seeThatObject', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param object $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ObjectMatcher
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatObject()
     */
    public function seeThatObject($params = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeThatObject', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ClassMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatClass()
     */
    public function canSeeThatClass($params = null) {
        return $this->getScenario()
            ->runStep(new \Codeception\Step\ConditionalAssertion('seeThatClass', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ClassMatcher
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatClass()
     */
    public function seeThatClass($params = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeThatClass', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\FileMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatFile()
     */
    public function canSeeThatFile($params = null) {
        return $this->getScenario()
            ->runStep(new \Codeception\Step\ConditionalAssertion('seeThatFile', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\FileMatcher
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatFile()
     */
    public function seeThatFile($params = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeThatFile', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\DirectoryMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatDirectory()
     */
    public function canSeeThatDirectory($params = null) {
        return $this->getScenario()
            ->runStep(new \Codeception\Step\ConditionalAssertion('seeThatDirectory', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\DirectoryMatcher
     * @see \PHPKitchen\CodeSpecsCore\Module\CodeSpecs::seeThatDirectory()
     */
    public function seeThatDirectory($params = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeThatDirectory', func_get_args()));
    }
}
