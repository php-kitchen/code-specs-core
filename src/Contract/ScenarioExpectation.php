<?php

namespace PHPKitchen\CodeSpecsCore\Contract;

/**
 * Represents expectation of a tests scenario. Defines basic interface for any expectations.
 * Any custom expectations should implement this interface.
 *
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
interface ScenarioExpectation {
    /**
     * Returns an instance of test invoked expectation.
     *
     * @return \PHPUnit\Framework\TestCase
     */
    public function getTest();
}