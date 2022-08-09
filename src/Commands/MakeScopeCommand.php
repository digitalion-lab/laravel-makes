<?php

namespace Digitalion\LaravelMakes\Commands;

use Digitalion\LaravelMakes\Traits\MakeCommandTrait;
use Illuminate\Console\GeneratorCommand;

class MakeScopeCommand extends GeneratorCommand
{
	use MakeCommandTrait;

	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $name = 'make:scope';

	/**
	 * The type of class being generated.
	 *
	 * @var string
	 */
	protected $type = 'Scope';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a new query scope class';
}
