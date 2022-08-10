<?php

namespace Digitalion\LaravelMakes\Traits;

use Illuminate\Support\Str;

trait MakeCommandTrait
{
	/**
	 * Get the stub file for the generator.
	 *
	 * @return string
	 */
	protected function getStub()
	{
		$filename = strtolower($this->type);
		$stub = app_path("stubs/$filename.stub");
		if (!file_exists($stub)) {
			$stub = __DIR__ . "/../../stubs/$filename.stub";
		}
		return $stub;
	}

	/**
	 * Get the default namespace for the class.
	 *
	 * @param  string  $rootNamespace
	 * @return string
	 */
	protected function getDefaultNamespace($rootNamespace)
	{
		$typePlural = Str::plural($this->type);
		return $rootNamespace . '\\' . $typePlural;
	}
}
