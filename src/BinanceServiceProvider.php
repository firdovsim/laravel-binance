<?php

namespace Binance\Binance;

use Binance\Binance\Commands\BinanceCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BinanceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('binance')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_binance_table')
            ->hasCommand(BinanceCommand::class);
    }
}
