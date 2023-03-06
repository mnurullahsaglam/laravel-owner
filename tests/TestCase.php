<?php

namespace Mnurullahsaglam\LaravelOwner\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Mnurullahsaglam\LaravelOwner\LaravelOwnerServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Mnurullahsaglam\\LaravelOwner\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-owner_table.php.stub';
        $migration->up();
        */
    }
}
