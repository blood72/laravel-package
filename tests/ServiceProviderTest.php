<?php

namespace Blood72\Package\Test;

use Blood72\Package\Contracts\PackageContract;
use Blood72\Package\Package;
use Blood72\Package\PackageServiceProvider;

class ServiceProviderTest extends TestCase
{
    /** @test */
    public function it_is_possible_to_defer_a_provider()
    {
        /** @var \Illuminate\Support\ServiceProvider $provider */
        $provider = $this->getMockBuilder(PackageServiceProvider::class)
            ->disableOriginalConstructor()
            ->setMethodsExcept(['isDeferred'])
            ->getMock();

        $actual = $provider->isDeferred();

        // $this->assertTrue($actual);
        $this->assertFalse($actual);
    }

    // /** @test */
    // public function it_can_register_binding(): void
    // {
    //     $actual = $this->app->get(PackageContract::class);
    //
    //     $this->assertInstanceOf(Package::class, $actual);
    // }

    // /** @test */
    // public function it_can_provide_services(): void
    // {
    //     /** @var \Illuminate\Support\ServiceProvider $provider */
    //     $provider = $this->getMockBuilder(PackageServiceProvider::class)
    //         ->disableOriginalConstructor()
    //         ->setMethodsExcept(['provides'])
    //         ->getMock();
    //
    //     $actual = $provider->provides();
    //
    //     $this->assertContains(PackageContract::class, $actual);
    // }
}
