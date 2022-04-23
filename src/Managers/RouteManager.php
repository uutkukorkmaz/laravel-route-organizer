<?php

namespace Uutkukorkmaz\RouteOrganizer\Managers;

use Illuminate\Support\Collection;
use Uutkukorkmaz\RouteOrganizer\Contracts\RouteContract;
use Uutkukorkmaz\RouteOrganizer\Exceptions\EmptyRoutesDictionaryException;

class RouteManager {

    protected ?Collection $dictionary = null;

    public function __construct() {
        $this->dictionary = new Collection();
    }

    public function add(array $routeClasses) {
        foreach ($routeClasses as $route) {
            $this->dictionary->add($route);
        }

        return $this;
    }

    /**
     * @throws EmptyRoutesDictionaryException
     */
    public function register(array $routeClasses = []) {
        $this->add($routeClasses);

        if (!$this->dictionary) {
            throw new EmptyRoutesDictionaryException();
        }

        $this->dictionary->each(function ($route) {
            /**
             * @var RouteContract $route
             */
            $route::register();
        });
    }

}
