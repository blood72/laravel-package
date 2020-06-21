<?php

namespace Blood72\Package\Test;

use Blood72\Package\Facades\PackageFacade;
use Blood72\Package\PackageServiceProvider;
use Orchestra\Testbench\TestCase as BaseCase;

abstract class TestCase extends BaseCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [PackageServiceProvider::class];
    }

    // /**
    //  * Get package aliases.
    //  *
    //  * @param  \Illuminate\Foundation\Application  $app
    //  * @return array
    //  */
    // protected function getPackageAliases($app)
    // {
    //     return ['Package' => PackageFacade::class];
    // }
}
