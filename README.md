# CodeSpecs

Codeception module for BDD style Unit tests that allows to writes test in a specification way using human-readable format. 
Goal of this module is to add a bunch of cool methods to "Actor" for unit testing and show a way of representing unit tests as a behavior specifications of a specific class and a test of specific method as a specification of the method.
See by yourself:
```php
use DeKey\CodeSpecs\Base\BehaviorSpecification;

class IncomeCalculatorTest extends BehaviorSpecification {
    private const EXPECTED_INCOME = 478;

    /**
     * @test
     */
    public function calculateIncomeSpec() {
        $service = new IncomeService();
        $I = $this->tester;
        $I->describe('process of income calculations.');
        $I->verifyThat('calculated income matches expected income.');
        $I->seeThatValueOf('calculated income', $service->calculateIncome())->isEqualTo(self::EXPECTED_INCOME);
    }
}
```

CodeSpecs also decorates errors output so, for example, if "IncomeService" service from example above will incorrectly calculate income the error output will include following message(example of output in PHPStorm):

![picture alt](docs/failed-test-output.png "Error output")

## Package information

Latest Stable Version |  Latest Unstable Version | Total Downloads | Monthly Downloads | Licensing 
--------------------- |  ----------------------- |  -------------- | ----------------  |--------- 
[![Latest Stable Version](https://poser.pugx.org/dekeysoft/code-specs/v/stable)](https://packagist.org/packages/dekeysoft/code-specs) | [![Latest Unstable Version](https://poser.pugx.org/dekeysoft/code-specs/v/unstable)](https://packagist.org/packages/dekeysoft/code-specs) | [![Total Downloads](https://poser.pugx.org/dekeysoft/code-specs/downloads)](https://packagist.org/packages/dekeysoft/code-specs) | [![Monthly Downloads](https://poser.pugx.org/dekeysoft/code-specs/d/monthly)](https://packagist.org/packages/dekeysoft/code-specs) | [![License](https://poser.pugx.org/dekeysoft/code-specs/license)](https://github.com/dekeysoft/code-specs/blob/master/LICENSE)

## Requirements

**`PHP >= 7.1` is required.**

**`Codeception >= 2.3` is required.**

## Getting Started

Run the following command to add CodeSpecs to your project's `composer.json`. See [Packagist](https://packagist.org/packages/dekeysoft/code-specs) for specific versions.

```bash
codeception require dekeysoft/code-specs
```

Or you can copy this library from:
- [Packagist](https://packagist.org/packages/dekeysoft/code-specs)
- [Github](https://github.com/dekeysoft/code-specs)


Update your suite configuration to enable CodeSpecs module
```yaml
modules:
    enabled:
        - \DeKey\CodeSpecs\Module\CodeSpecs
```

Re-build your suite to get all of the CodeSpecs methods to your actor class(es).
```bash
cocecept build
```

Then you can use CodeSpecs simply by extending your test case from "DeKey\CodeSpecs\Base\BehaviorSpecification". Example:
```php
use DeKey\CodeSpecs\Base\BehaviorSpecification;

class YourTestCase extends BehaviorSpecification {

    public function testSomeMethod() {
        $I = $this->tester;
        ......
        $I->seeThatBoolean('my dummy variable', true)->isFalse();
    }
}
```

See more guides in the [project documentation](docs/README.md)

## Build status

CI status    | Code quality
------------ | ------------
[![Build Status](https://travis-ci.org/dekeysoft/code-specs.svg?branch=master)](https://travis-ci.org/dekeysoft/code-specs) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dekeysoft/code-specs/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/dekeysoft/code-specs/?branch=master)
