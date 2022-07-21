<?php

namespace Digitalion\LaravelMakes\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeEnumCommand extends GeneratorCommand
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $name = 'make:enum';

	/**
	 * The type of class being generated.
	 *
	 * @var string
	 */
	protected $type = 'Enum';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a new enum class';


	/**
	 * Get the stub file for the generator.
	 *
	 * @return string
	 */
	protected function getStub()
	{
		$php_versions = explode('.', phpversion());
		$stub_suffix = intval($php_versions[0] . $php_versions[1]) >= 81 ? '_81' : '';

		$filename = strtolower($this->type);
		$stub = app_path("stubs/$filename$stub_suffix.stub");
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
		return $rootNamespace . '\Enums';
	}
}
