<?php

namespace PhpUnitsOfMeasureTest\PhysicalQuantity;

use PhpUnitsOfMeasure\PhysicalQuantity\Velocity;

class VelocityTest extends AbstractPhysicalQuantityTestCase
{
    protected $supportedUnitsWithAliases = [
        'm/s',
        'meters/sec',
        'meters per second',
        'meter per second',
        'metres per second',
        'metre per second',
        'km/h',
        'km/hour',
        'kilometer per hour',
        'kilometers per hour',
        'kilometre per hour',
        'kilometres per hour',
        'ft/s',
        'feet/sec',
        'feet per second',
        'mph',
        'miles/hour',
        'miles per hour',
        'knot',
        'knots',
    ];

    protected function instantiateTestQuantity()
    {
        return new Velocity(1, 'm/s');
    }

    public function testToKilometersPerHour()
    {
        $speed = new Velocity(1, 'km/h');
        $this->assertEquals(0.277778, $speed->toUnit('m/s'));
    }

    public function testToFeetPerSecond()
    {
        $speed = new Velocity(2, 'm/s');
        $this->assertEqualsWithDelta(6.56167979003, $speed->toUnit('ft/s'), 0.00000000001);
    }

    public function testToKmPerHour()
    {
        $speed = new Velocity(2, 'mph');
        $this->assertEquals(3.21868542505166, $speed->toUnit('km/h'), 0.00000000001);
    }

    public function testToKnot()
    {
        $speed = new Velocity(2, 'm/s');
        $this->assertEquals(3.8876923435786983, $speed->toUnit('knot'));
    }
}
