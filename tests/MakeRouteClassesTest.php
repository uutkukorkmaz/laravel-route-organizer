<?php

namespace Uutkukorkmaz\RouteOrganizer\Tests;


use Illuminate\Foundation\Testing\Concerns\InteractsWithConsole;

class MakeRouteClassesTest extends TestCase {

    use InteractsWithConsole;

    /**
     * @test
     * @covers \Uutkukorkmaz\RouteOrganizer\Console\MakeRouteCommand
     */
    public function test_it_should_create_a_class_using_artisan() {
        $this->artisan('make:route FlightRoutes')
            ->expectsOutput('Route created successfully.')
            ->assertSuccessful();
    }

    /**
     * @test
     * @covers       \Uutkukorkmaz\RouteOrganizer\Console\MakeRouteCommand
     * @covers       \Uutkukorkmaz\RouteOrganizer\Facades\Organizer
     * @covers       \Uutkukorkmaz\RouteOrganizer\Managers\RouteManager
     * @define-route usesFlightRoutes
     */
    public function test_created_route_classes_should_have_correct_directory_structure() {
        $this->artisan('make:route Crew/PilotRoutes')
            ->expectsOutput('Route created successfully.')
            ->assertSuccessful();

        $this->assertDirectoryExists(app_path('Routes/Crew'));
    }


}
