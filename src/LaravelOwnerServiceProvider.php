<?php

namespace Mnurullahsaglam\LaravelOwner;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mnurullahsaglam\LaravelOwner\Commands\LaravelOwnerCommand;

class LaravelOwnerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-owner')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-owner_table')
            ->hasCommand(LaravelOwnerCommand::class);
    }
}
