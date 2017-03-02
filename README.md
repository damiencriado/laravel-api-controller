<p align="center"><img src="https://www.dropbox.com/s/7ryp106t5nq7ito/laravel-api-controller.png?raw=1" width="600"></p>

[![Packagist Latest Version][ico-version]][link-packagist]
[![Packagist Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]](LICENSE.md)
[![Code Climate][ico-codeclimate]][link-codeclimate]
[![Code Climate Coverage][ico-coverage]][link-codeclimate]
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
[ico-license]: https://img.shields.io/packagist/l/itsdamien/laravel-api-controller.svg
[ico-codeclimate]: https://codeclimate.com/repos/58b754014e1b4002920000a9/badges/14e4a50b989e2a51458d/gpa.svg
[ico-coverage]: https://codeclimate.com/repos/58b754014e1b4002920000a9/badges/14e4a50b989e2a51458d/coverage.svg
[ico-styleci]: https://styleci.io/repos/83411217/shield?branch=master&style=flat

[link-packagist]: https://packagist.org/packages/itsdamien/laravel-api-controller
[link-downloads]: https://packagist.org/packages/itsdamien/laravel-api-controller
[link-codeclimate]: https://codeclimate.com/repos/58b754014e1b4002920000a9/feed
[link-styleci]: https://styleci.io/repos/83411217
