<?php

namespace PhpUnitsOfMeasureTest\PhysicalQuantity;

use PHPUnit\Framework\TestCase;
use PhpUnitsOfMeasure\PhysicalQuantityInterface;

/**
 * This is a parent class for all the PhysicalQuantity childrens' test cases.
 */
abstract class AbstractPhysicalQuantityTestCase extends TestCase
{
    protected $supportedUnitsWithAliases = [];

    /**
     * Verify that the object instantiates without error.
     */
    public function testConstructorSucceeds()
    {
        $this->expectNotToPerformAssertions();

        $this->instantiateTestQuantity();
    }

    /**
     * Convert to each of the known supported units, verifying that no
     * exceptions are thrown.
     */
    public function testSupportedUnits()
    {
        $this->expectNotToPerformAssertions();

        $quantity = $this->instantiateTestQuantity();

        foreach ($this->supportedUnitsWithAliases as $unit) {
            $quantity->toUnit($unit);
        }
    }

    /**
     * Build a test object of the target physical quantity.
     *
     * @return PhysicalQuantityInterface
     */
    abstract protected function instantiateTestQuantity();
}
