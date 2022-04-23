<?php

namespace Uutkukorkmaz\RouteOrganizer\Facades;

use Illuminate\Support\Facades\Facade;
use Uutkukorkmaz\RouteOrganizer\Managers\RouteManager;

/**
 * @method add(array $routeClasses)
 * @method register(array $routeClasses)
 */
class Organizer extends Facade {

    protected static function getFacadeAccessor() {
        return RouteManager::class;
    }

}
