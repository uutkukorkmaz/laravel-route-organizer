# Laravel Route Organizer

[//]: # (BADGES)

## Introduction

-----
This package helps you keep your route files more organized, more convenient and easier to read. Using this package, you
only need to go to specific route class and make adjustments in the place which is contains only
relevant routes. No more searching through that messy route files line by line for the only one route you want to
adjust.

A route class is just a regular class that looks like this:

```php
use Uutkukorkmaz\RouteOrganizer\Contracts\RouteContract as RegistersRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;

class FlightRoutes implements RegistersRoute {
    
    public static function register(){
        Route::group([
        "prefix" => "flights",
        "as" => "flights.",
        "controller" => FlightController::class],function(){
            // your flight routes...
        });
    }    
    
}
```

#### Why would you be using this package?

Being organized is really important while actively maintaining complex repositories, Route Organizer makes this process
easier. And also your files going to be shorter than ever!

## Installation

-----
You can install the package via composer:

```shell
composer require uutkukorkmaz/laravel-route-organizer
```

## Usage

-----

- ### Basic Usage

Add the Organizer Facade in your route file. Let's say we have a `FlightRoutes` class and we'd like to use it
in `routes/web.php`...

````php
use Uutkukorkmaz\RouteOrganizer\Facades\Organizer;

Organizer::register([
    App\Routes\FlightRoutes::class,
]);
````

- ### Creating Routes

You can create a route class from the console with artisan command. But please note that the CLI part is work in
progress.
And please feel free to [suggest a feature](https://github.com/uutkukorkmaz/laravel-route-organizer/issues/new) or
contribute.

```shell
php artisan make:route FlightRoutes
```

## Changelog

-----
Please see [CHANGELOG.md](https://github.com/uutkukorkmaz/laravel-route-organizer/blob/main/CHANGELOG.md) file for more
information on what are the changes recently.

## Credits

-----
Please see [all contributors](https://github.com/uutkukorkmaz/laravel-route-organizer/graphs/contributors).

## Licence

-----
The MIT Licence (MIT). Please
see [LICENCE.md](https://github.com/uutkukorkmaz/laravel-route-organizer/blob/main/LICENCE.md) file for more
information.