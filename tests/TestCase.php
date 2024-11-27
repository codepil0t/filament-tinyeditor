<?php

namespace codepil0t\FilamentFormsTinyeditor\Tests;

use codepil0t\FilamentFormsTinyeditor\FilamentFormsTinyeditorServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            FilamentFormsTinyeditorServiceProvider::class,
        ];
    }
}
