## Introduction

Laravel Sanctum MongoDB provides a featherweight authentication system for SPAs and simple APIs.

## Installation

You may install Laravel Sanctum MongoDB via the Composer package manager:
```
composer require mocode/sanctum-mongodb
```

Next, you should publish the Sanctum configuration and migration files using the `vendor:publish` Artisan command. The `sanctum` configuration file will be placed in your application's `config` directory:
```
php artisan vendor:publish --provider="Mocode\Sanctum\SanctumServiceProvider"
```

Finally, you should run your database migrations. Sanctum will create one database table in which to store API tokens:
```
php artisan migrate
```

Next, if you plan to utilize Sanctum to authenticate an SPA, you should add Sanctum's middleware to your `api` middleware group within your application's `app/Http/Kernel.php` file:
```
'api' => [
    \Mocode\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
    'throttle:api',
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
],
```

## Official Documentation

Documentation for Sanctum can be found on the [Laravel website](https://laravel.com/docs/sanctum).

## License

Laravel Sanctum MongoDB is open-sourced software licensed under the [MIT license](LICENSE.md).
