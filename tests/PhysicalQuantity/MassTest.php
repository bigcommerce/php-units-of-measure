<?php

namespace PhpUnitsOfMeasureTest\PhysicalQuantity;

use PhpUnitsOfMeasure\PhysicalQuantity\Mass;

class MassTest extends AbstractPhysicalQuantityTestCase
{
    protected $supportedUnitsWithAliases = [
        'kg',
        'kilogram',
        'kilograms',
        'Yg',
        'yottagram',
        'yottagrams',
        'Zg',
        'zettagram',
        'zettagrams',
        'Eg',
        'exagram',
        'exagrams',
        'Pg',
        'petagram',
        'petagrams',
        'Tg',
        'teragram',
        'teragrams',
        'Gg',
        'gigagram',
        'gigagrams',
        'Mg',
        'megagram',
        'megagrams',
        'hg',
        'hectogram',
        'hectograms',
        'dag',
        'decagram',
        'decagrams',
        'g',
        'gram',
        'grams',
        'dg',
        'decigram',
        'decigrams',
        'cg',
        'centigram',
        'centigrams',
        'mg',
        'milligram',
        'milligrams',
        'µg',
        'microgram',
        'micrograms',
        'ng',
        'nanogram',
        'nanograms',
        'pg',
        'picogram',
        'picograms',
        't',
        'ton',
        'tons',
        'tonne',
        'tonnes',
        'lb',
        'lbs',
        'pound',
        'pounds',
        'oz',
        'ounce',
        'ounces',
        'st',
        'stone',
        'stones',
    ];

    protected function instantiateTestQuantity()
    {
        return new Mass(1, 'kg');
    }

    public function testToGrams()
    {
        $quantity = new Mass(5, 'kg');
        $this->assertEquals(5000, $quantity->toUnit('g'));
    }

    public function testToMilligrams()
    {
        $quantity = new Mass(5, 'kg');
        $this->assertEquals(5*1e6, $quantity->toUnit('mg'));
    }

    public function testToPounds()
    {
        $quantity = new Mass(16, 'oz');
        $this->assertEquals(1, $quantity->toUnit('pound'));
    }

    public function testToStones()
    {
        $quantity = new Mass(14, 'pound');
        $this->assertEquals(1, $quantity->toUnit('st'));
    }
}
