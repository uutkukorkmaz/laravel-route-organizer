<?php

namespace Uutkukorkmaz\RouteOrganizer;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Uutkukorkmaz\RouteOrganizer\Console\MakeRouteCommand;

class RouteOrganizerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-route-organizer')
            ->hasCommands([
                MakeRouteCommand::class,
            ]);
    }

    public function packageRegistered()
    {
    }
}
