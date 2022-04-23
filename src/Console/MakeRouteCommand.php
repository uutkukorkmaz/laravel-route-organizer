<?php

namespace Uutkukorkmaz\RouteOrganizer\Console;

use Illuminate\Console\Concerns\CreatesMatchingTest;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class MakeRouteCommand extends GeneratorCommand {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "make:route {name}";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new route group class';


    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Route';


    protected function getStub() {
        return __DIR__ . '/../../stubs/route.default.stub';
    }

    protected function getDefaultNamespace($rootNamespace) {
        return $rootNamespace . '\\' . Str::plural($this->type);
    }

}
