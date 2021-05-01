# Laravel Makes

[![Packagist License](https://poser.pugx.org/digitalion/laravel-makes/license.png)](http://choosealicense.com/licenses/mit/)
[![Latest Stable Version](https://poser.pugx.org/digitalion/laravel-makes/version.png)](https://packagist.org/packages/digitalion/laravel-makes)
[![Total Downloads](https://poser.pugx.org/digitalion/laravel-makes/d/total.png)](https://packagist.org/packages/digitalion/laravel-makes)

**Collection of additional class creation commands for Artisan**

## What It Does

This package expands on the basic artisan commands for creating classes.

## Installation

Require this package with composer. It is recommended to only require the package for development.

```shell
composer require digitalion/laravel-makes
```

Laravel uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

## Usage

Once the package is installed, you'll have additional Artisan commands:

### make:class

Create a new generic class in: `App\Classes\`

```shell
php artisan make:class DigitalionClass
```

### make:enum

Create a new enum class in: `App\Enums\`

```shell
php artisan make:enum DigitalionEnum
```

### make:helper

Create a new helper class in: `App\Helpers\`

```shell
php artisan make:helper DigitalionHelper
```

### make:scope

Create a new query scope class in: `App\Scopes\`

```shell
php artisan make:scope DigitalionScope
```

### make:trait

Create a new trait class in: `App\Traits\`

```shell
php artisan make:trait DigitalionTrait
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
