<?php

namespace PHPKitchen\CodeSpecsCore\Contract;

use PHPKitchen\CodeSpecsCore\Directive\Wait;
use PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\DelayedDispatcher;
use PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\Dispatcher;
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
 * Represents a test-guy who is testing your code, so tests writes as a story of what tester is doing.
 *
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
interface TestGuy {
    /**
     * Specifies scenario test guy is working on.
     *
     * @param string $scenario scenario name.
     * Scenario should be a logical ending of "I describe ". For example: "process of user registration".
     * Such scenario would result in "I describe process of user registration" output in console.
     * @return $this
     */
    public function describe(string $scenario): TestGuy;

    /**
     * Specifies what test guy expects from a set of matchers that would be defined next in the
     * specification.
     *
     * @param string $expectation expectation text.
     * Expectation should be a logical ending of "I expect that ". For example: "user is added to the DB".
     * Such scenario would result in "I expect that user is added to the DB" output in console.
     * @return $this
     */
    public function expectThat(string $expectation): TestGuy;

    /**
     * Specifies what test guy expects from a set of matchers that would be defined next in the
     * specification.
     *
     * @param string $expectation expectation text.
     * Expectation should be a logical ending of "I expect to ". For example: "see user in the DB".
     * Such scenario would result in "I expect to see user in the DB" output in console.
     * @return $this
     */
    public function expectTo(string $expectation): TestGuy;

    /**
     * Specifies what test guy expects from a set of matchers that would be defined next in the
     * specification.
     *
     * @param string $expectation expectation text.
     * Expectation should be a logical ending of "I expect to ". For example: "see user in the DB".
     * Such scenario would result in "I expect to see user in the DB" output in console.
     * @return $this
     */
    public function verifyThat(string $expectation): TestGuy;

    /**
     * @param $variableName
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\DelayedDispatcher
     */
    public function lookAt(string $variableName): TestGuy;

    /**
     * @param $variableName
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Dispatcher\DelayedDispatcher
     */
    public function match(string $variableName): DelayedDispatcher;
    

    /**
     * @param $numberOfTimeUnits
     * @return \PHPKitchen\CodeSpecsCore\Module\CodeSpecs
     */
    public function wait($numberOfTimeUnits): Wait;

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param mixed $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ValueMatcher
     */
    public function see($variable): ValueMatcher;

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\StringMatcher
     */
    public function seeString($variable): StringMatcher;

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param array|\ArrayAccess $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ArrayMatcher
     */
    public function seeArray($variable): ArrayMatcher;

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param boolean $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\BooleanMatcher
     */
    public function seeBool($variable): BooleanMatcher;

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param int|float $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\NumberMatcher
     */
    public function seeNumber($variable): NumberMatcher;

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param object $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ObjectMatcher
     */
    public function seeObject($variable): ObjectMatcher;

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\ClassMatcher
     */
    public function seeClass($variable): ClassMatcher;

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\FileMatcher
     */
    public function seeFile($variable): FileMatcher;

    /**
     * @param string $variableNameOrVariable variable to be tested or it's name
     * @param string $variable variable to be tested (optional)
     * @return \PHPKitchen\CodeSpecsCore\Expectation\Matcher\DirectoryMatcher
     */
    public function seeDirectory($variable): DirectoryMatcher;
}