<?php

namespace Tests\Unit\Example;

use PHPKitchen\CodeSpecsCore\Base\BehaviorSpecification;

class IncomeCalculatorTest extends BehaviorSpecification {
    /**
     * @var \UnitTester
     */
    public $tester;
    private const EXPECTED_INCOME = 478;
    private const EXPECTED_TAX_FOR_FIRST_LEVEL_TAX_RULE = 4500;
    private const EXPECTED_TAX_FOR_SECOND_LEVEL_TAX_RULE = 7200;
    private const EXPECTED_TAX_FOR_THIRD_LEVEL_TAX_RULE = 30000;

    /**
     * @test
     *
     */
    public function calculateTaxSpec() {
        $clientsPayments = [];
        $hoursSpentWorking = 160;
        $service = new IncomeService($clientsPayments, $hoursSpentWorking);
        $I = $this->tester;
        $I->describe('income tax calculations');

        $matchIncomeTax = $I->match('income tax')->isNumber()->isNotEmpty()->isGreaterThan(0);

        $I->verifyThat('income calculator honors tax rules for different ranges of income');

        $I->expectThat('for income less that 50 000 calculator use 10% tax rule');
        $matchIncomeTax($service->calculateTax())->isEqualTo(self::EXPECTED_TAX_FOR_FIRST_LEVEL_TAX_RULE);
        $matchIncomeTax($service->calculateTax())->isEqualTo(self::EXPECTED_TAX_FOR_FIRST_LEVEL_TAX_RULE);

        $I->expectThat('for income between 50 000 and 100 000 calculator use 12% tax rule');
        $matchIncomeTax($service->calculateTax())->isEqualTo(self::EXPECTED_TAX_FOR_SECOND_LEVEL_TAX_RULE, 'expected tax of a second level tax');

        $I->expectThat('for income more than 100 000 calculator use 20% tax rule');
        $I->lookAt('income tax');
        $I->seeThat($service->calculateTax())
            ->isNumber()
            ->isNotEmpty()
            ->isEqualTo(self::EXPECTED_TAX_FOR_THIRD_LEVEL_TAX_RULE, 'expected tax of a third level tax');
    }
}

class IncomeService {
    public function __construct($clientsPayments, $workingHours) {
    }

    public function calculateWithoutTax() {
        return 478;
    }

    public function calculateWithTax() {
        return 478;
    }

    public function calculateTax() {
        return 4500;
    }
}