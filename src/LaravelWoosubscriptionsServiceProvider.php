<?php

namespace Manuglopez\LaravelWoosubscriptions;

use Manuglopez\LaravelWoosubscriptions\Commands\LaravelWoosubscriptionsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelWoosubscriptionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-woosubscriptions')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-woosubscriptions_table')
            ->hasCommand(LaravelWoosubscriptionsCommand::class);
    }
}
