<?php

namespace Tests\Base;

use PHPKitchen\CodeSpecsCore\Base\BehaviorSpecification;

/**
 * Represents base class for all of the test cases.
 *
 * @property \UnitTester $tester
 *
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
class TestCase extends BehaviorSpecification {
    const FIXTURES_DIR = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Fixtures' . DIRECTORY_SEPARATOR;
}