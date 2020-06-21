<?php

namespace Blood72\Package\Facades;

use Blood72\Package\Contracts\PackageContract;
use Illuminate\Support\Facades\Facade;

class PackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return PackageContract::class;
    }
}
