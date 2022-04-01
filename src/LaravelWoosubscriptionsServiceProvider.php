<?php

namespace Manuglopez\LaravelWoosubscriptions;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Manuglopez\LaravelWoosubscriptions\Commands\LaravelWoosubscriptionsCommand;

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
