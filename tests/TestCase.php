<?php

namespace Vormkracht10\PackageTemplate\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Vormkracht10\PackageTemplate\Providers\PackageTemplateProvider;

abstract class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        $serviceProviders = [
            PackageTemplateProvider::class,
        ];

        return $serviceProviders;
    }

    protected function getEnvironmentSetUp($app)
    {
        // config()->set('database.default', 'sqlite');

        // config()->set('database.connections.sqlite', [
        //     'driver' => 'sqlite',
        //     'database' => ':memory:',
        //     'prefix' => '',
        // ]);
    }
}
