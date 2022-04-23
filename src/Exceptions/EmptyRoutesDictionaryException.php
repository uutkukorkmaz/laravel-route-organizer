<?php

namespace Uutkukorkmaz\RouteOrganizer\Exceptions;

use Exception;

class EmptyRoutesDictionaryException extends Exception {

    protected $message = "Route dictionary is empty. You must add at least one Route class.";

}
