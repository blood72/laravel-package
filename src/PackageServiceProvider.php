<?php

namespace Blood72\Package;

// use Illuminate\Contracts\Support\DeferrableProvider;
use Blood72\Package\Contracts\PackageContract;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider /*implements DeferrableProvider*/
{
    /** @var string */
    protected const CONFIG_PATH = __DIR__ . '/../config/package.php';

    // /** @var string */
    // protected const MIGRATION_PATH = __DIR__ . '/../migrations/';

    /** @var string */
    protected string $config = 'package';

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadMigrationsFrom(self::MIGRATION_PATH);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                self::CONFIG_PATH => config_path("$this->config.php"),
            ], 'config');

            // $this->publishes([
            //     self::MIGRATION_PATH => database_path('migrations'),
            // ], 'migrations');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(self::CONFIG_PATH, $this->config);

        // $this->app->singleton(PackageContract::class, function ($app) {
        //     return new Package($app['config']->get($this->config));
        // });

        // $this->app->alias(PackageContract::class, 'package');
    }

    // /**
    //  * Get the services provided by the provider.
    //  *
    //  * @return array
    //  */
    // public function provides()
    // {
    //     return [PackageContract::class];
    // }
}
