# Laravel Api Controller

[![Latest Stable Version](https://poser.pugx.org/itsdamien/laravel-api-controller/v/stable)](https://packagist.org/packages/itsdamien/laravel-api-controller)
[![Total Downloads](https://poser.pugx.org/itsdamien/laravel-api-controller/downloads)](https://packagist.org/packages/itsdamien/laravel-api-controller)
[![License](https://poser.pugx.org/itsdamien/laravel-api-controller/license)](https://packagist.org/packages/itsdamien/laravel-api-controller)
[![Build Status](https://travis-ci.org/itsDamien/laravel-api-controller.svg?branch=master)](https://travis-ci.org/itsDamien/laravel-api-controller)
[![Maintainability](https://api.codeclimate.com/v1/badges/56a6ab3964fcf2fff6fa/maintainability)](https://codeclimate.com/github/itsDamien/laravel-api-controller/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/56a6ab3964fcf2fff6fa/test_coverage)](https://codeclimate.com/github/itsDamien/laravel-api-controller/test_coverage)
[![StyleCI](https://styleci.io/repos/83411217/shield?branch=master&style=flat)](https://styleci.io/repos/83411217)

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
