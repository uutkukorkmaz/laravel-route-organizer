<?php

namespace Uutkukorkmaz\RouteOrganizer\Tests;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use http\Exception\InvalidArgumentException;
use Illuminate\Foundation\Testing\Concerns\InteractsWithConsole;
use Illuminate\Support\Facades\Artisan;
use Orchestra\Testbench\TestCase as Orchestra;
use Uutkukorkmaz\RouteOrganizer\RouteOrganizerServiceProvider;

abstract class TestCase extends Orchestra {

    use InteractsWithConsole;

    protected function assertTestPassed(): void {
        $this->assertTrue(true);
    }

    protected function getPackageProviders($app) {
        return [
            RouteOrganizerServiceProvider::class,
        ];
    }

    protected function pathToTests(): string {
        return __DIR__;
    }

    protected function setUp(): void {
        parent::setUp();
        File::deleteDirectory(app_path('Routes'));
    }


    protected function assertRouteDoesExists(string $routeName): self {
        $this->assertTrue(Route::has($routeName));

        return $this;
    }

    protected function assertSeeInConsoleOutput(string $text): self {
        $this->assertStringContainsString($text, Artisan::output());

        return $this;
    }

    /**
     * @coversNothing
     */
    public function test_example_test() {
        $this->assertTestPassed();
    }

}
