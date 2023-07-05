<?php

namespace AnamarijaPapic\Example;

use AnamarijaPapic\Example\Commands\ExampleCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-example')
            ->hasConfigFile()
            // ->hasViews()
            ->hasMigration('create_my_models_table')
            ->hasCommand(ExampleCommand::class);
    }
}
