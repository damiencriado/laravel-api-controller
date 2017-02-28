# Laravel 5 / Lumen 5 Api Controller

[![Packagist Latest Version][ico-version]][link-packagist]
[![Packagist Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]](LICENSE.md)
[![StyleCI][ico-styleci]][link-styleci]

A simple api controller helper trait, compatible with Lumen 5+ and Laravel 5+. The goal of this project is to make creating API projects simple. Inspired by Jeffrey Way (https://www.laracasts.com)

## Installation
```composer require itsdamien/laravel-api-controller```

## Basic Setup/Usage
```php
use ItsDamien\Api\ApiController;

class MyController extends Controller {

    use ApiController;
    
    public function index() {
        return $this->respond(['status' => 'hello world']);
    }
    
}
```

## Api Helper functions
Please browse through the source to see a full list.
```php
//200 response
$this->respond();

//201 response
$this->respondCreated();

//500 error
$this->respondServerError();

//422 error
$this->respondUnprocessable();

//General error
$this->respondWithError('message here');
```

## License

Laravel Api Controller is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

[ico-version]: https://img.shields.io/packagist/v/itsdamien/laravel-api-controller.svg
[ico-downloads]: https://img.shields.io/packagist/dt/itsdamien/laravel-api-controller.svg
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg
[ico-styleci]: https://styleci.io/repos/83411217/shield?branch=master&style=flat

[link-packagist]: https://packagist.org/packages/itsdamien/laravel-api-controller
[link-downloads]: https://packagist.org/packages/itsdamien/laravel-api-controller
[link-styleci]: https://styleci.io/repos/83411217
