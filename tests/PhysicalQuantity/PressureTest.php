<?php

namespace PhpUnitsOfMeasureTest\PhysicalQuantity;

use PhpUnitsOfMeasure\PhysicalQuantity\Pressure;

class PressureTest extends AbstractPhysicalQuantityTestCase
{
    protected $supportedUnitsWithAliases = [
        'Pa',
        'pascal',
        'YPa',
        'yottapascal',
        'ZPa',
        'zettapascal',
        'EPa',
        'exapascal',
        'PPa',
        'petapascal',
        'TPa',
        'terapascal',
        'GPa',
        'gigapascal',
        'MPa',
        'megapascal',
        'kPa',
        'kilopascal',
        'hPa',
        'hectopascal',
        'daPa',
        'decapascal',
        'dPa',
        'decipascal',
        'cPa',
        'centipascal',
        'mPa',
        'millipascal',
        'µPa',
        'micropascal',
        'nPa',
        'nanopascal',
        'pPa',
        'picopascal',
        'atm',
        'atmosphere',
        'atmospheres',
        'bar',
        'Ybar',
        'Zbar',
        'Ebar',
        'Pbar',
        'Tbar',
        'Gbar',
        'Mbar',
        'kbar',
        'hbar',
        'dabar',
        'dbar',
        'cbar',
        'mbar',
        'µbar',
        'nbar',
        'pbar',
        'inHg',
        'inches of mercury',
        'mmHg',
        'millimeters of mercury',
        'millimetres of mercury',
        'torr',
        'psi',
        'pounds per square inch',
    ];

    protected function instantiateTestQuantity()
    {
        return new Pressure(1, 'Pa');
    }
}
