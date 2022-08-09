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

Enums implement the trait `Digitalion\LaravelMakes\Traits\EnumSerializableTrait` that adds useful methods for using enums. [View the enum methods](#enum-methods)

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

### make:service

Create a new query scope class in: `App\Services\`

```shell
php artisan make:service DigitalionService
```

### make:trait

Create a new trait class in: `App\Traits\`

```shell
php artisan make:trait DigitalionTrait
```

## Enum methods

### Get the array options

```
$options = DigitalionEnum::options();

// dump $options
[
	'key1'	=> 'value1',
	'key2'	=> 'value2',
	'key3'	=> 'value3',
]
```

### Get the array values

```
$values = DigitalionEnum::values();

// dump $values
[
	'value1',
	'value2',
	'value3',
]
```

### Get the array keys

```
$keys = DigitalionEnum::keys();

// dump $keys
[
	'key1',
	'key2',
	'key3',
]
```

### Get the string values

This method returns a string with all the values of the enum, divided by the comma.
You may find this useful if you use it in Laravel's validation rules such as [`in:`](https://laravel.com/docs/master/validation#rule-in).

```
$valuesString = DigitalionEnum::valuesImplode();

// dump $valuesString
'value1,value2,value3'
```

### Get the regex values

This method returns a string with regex to validate the Enum values.
You may find this useful by using it in routes to accept only its values in parameters ([Laravel Docs - Regular Expression Constraints](https://laravel.com/docs/master/routing#parameters-regular-expression-constraints)).

```
$valuesRegex = DigitalionEnum::valuesRegex();

// dump $valuesRegex
'(value1|value2|value3)$'
```

### Get the translated array

By passing the translation key prefix of the enum values, you will get an array with all the translated keys and values.

File: **resources/lang/en/enums.php**
```php
return [
    'digitalion' => [
        'key1' => 'Value 1',
        'key2' => 'Value 2',
        'key3' => 'Value 3',
    ],
];
```

Use:
```php
$trans = DigitalionEnum::trans('enums.digitalion');

// dump $trans
[
	'key1'	=> 'Value 1',
	'key2'	=> 'Value 2',
	'key3'	=> 'Value 3',
]
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
