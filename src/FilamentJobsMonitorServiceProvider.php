<?php

namespace Croustibat\FilamentJobsMonitor;

use Croustibat\FilamentJobsMonitor\Resources\QueueMonitorResource;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentJobsMonitorServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-jobs-monitor';

    protected array $resources = [
        QueueMonitorResource::class,
    ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->publishesServiceProvider('QueueMonitorServiceProvider')
            ->hasMigration('create_jobs-monitor-for-laravel_table');
    }
}