<?php

namespace BobiMicroweber\FilamentFlatpickr\Tests;

use BobiMicroweber\FilamentFlatpickr\FilamentFlatpickrServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'BobiMicroweber\\FilamentFlatpickr\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentFlatpickrServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-flatpickr_table.php.stub';
        $migration->up();
        */
    }
}
