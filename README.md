# ![][img-logo] Laravel Makes [![Power by][power-by]][link-digitalion]

[![Packagist License][badge_license]](LICENSE.md)
[![Packagist][badge_package]][link-packagist]
[![Packagist Release][badge_version]][link-packagist]
[![Packagist Downloads][badge_downloads]][link-packagist]
[![Packagist Stars][badge_stars]][link-packagist]

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

[badge_license]: https://img.shields.io/github/license/digitalion/laravel-makes
[badge_stars]: https://img.shields.io/packagist/stars/digitalion/laravel-makes
[badge_package]: https://img.shields.io/badge/package-digitalion/laravel--geo-blue.svg
[badge_version]: https://img.shields.io/github/v/tag/digitalion/laravel-makes
[badge_downloads]: https://img.shields.io/packagist/dt/digitalion/laravel-makes
[link-packagist]: https://packagist.org/packages/digitalion/laravel-makes
[link-digitalion]: https://digitalion.it
[power-by]: https://img.shields.io/badge/power%20by-Digitalion-orange
[img-logo]: https://raw.githubusercontent.com/digitalion/laravel-makes/master/icon_xs.png
