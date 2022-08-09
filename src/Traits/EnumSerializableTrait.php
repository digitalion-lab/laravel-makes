<?php

namespace Digitalion\LaravelMakes\Traits;

use ReflectionClass;

trait EnumSerializableTrait
{
	public static function options(): array
	{
		$class = get_called_class();
		$refl = new ReflectionClass('\\' . $class);
		return $refl->getConstants();
	}
	public static function values(): array
	{
		$arr = self::options();
		return array_values($arr);
	}
	public static function keys(): array
	{
		$arr = self::options();
		return array_keys($arr);
	}

	public static function valuesImplode(): string
	{
		$constants = static::values();
		return implode(',', $constants);
	}

	public static function valuesRegex(): string
	{
		$constants = static::values();
		return '(' . implode('|', $constants) . ')$';
	}

	public static function trans(string $trans_prefix): array
	{
		$consts = self::options();
		return collect($consts)->mapWithKeys(function ($value, $key) use ($trans_prefix) {
			return [$value => trans(\Str::finish($trans_prefix, '.') . $value)];
		})->all();
	}
}
