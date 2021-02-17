<?php

namespace Vormkracht10\PackageTemplate\Facades;

use Illuminate\Support\Facades\Facade;
use Vormkracht10\PackageTemplate\PackageTemplate as PackageTemplateClass;

class PackageTemplate extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return PackageTemplateClass::class;
    }
}
