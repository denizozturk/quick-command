<?php

namespace DenizOzturk\QuickCommand\Tests;

use DenizOzturk\QuickCommand\QuickCommandServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        $this->afterApplicationCreated(function () {
            $this->publishStubs();
        });

        $this->beforeApplicationDestroyed(function () {
            $this->publishStubs();
        });

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'DenizOzturk\\QuickCommand\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );

        parent::setUp();
    }

    public function publishStubs(): void
    {
        $this->artisan('vendor:publish', [
            '--provider' => QuickCommandServiceProvider::class,
            '--tag' => 'stubs',
        ]);

        $this->artisan('quick:publish --force');
    }

    protected function getPackageProviders($app): array
    {
        return [
            QuickCommandServiceProvider::class,
        ];
    }
}
