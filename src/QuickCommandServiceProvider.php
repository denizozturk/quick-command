<?php

namespace DenizOzturk\QuickCommand;

use DenizOzturk\QuickCommand\Commands\QuickCommand;
use DenizOzturk\QuickCommand\Commands\QuickStubsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QuickCommandServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('quick-command')
            ->hasCommands([
                QuickStubsCommand::class,
                QuickCommand::class,
            ]);
    }
}
