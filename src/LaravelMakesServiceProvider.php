<?php

namespace Digitalion\LaravelMakes;

use Digitalion\LaravelMakes\Commands\MakeClassCommand;
use Digitalion\LaravelMakes\Commands\MakeEnumCommand;
use Digitalion\LaravelMakes\Commands\MakeHelperCommand;
use Digitalion\LaravelMakes\Commands\MakeScopeCommand;
use Digitalion\LaravelMakes\Commands\MakeTraitCommand;
use Illuminate\Support\ServiceProvider as ServiceProvider;

class LaravelMakesServiceProvider extends ServiceProvider
{
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		if ($this->app->runningInConsole()) {
			$this->commands([
				MakeClassCommand::class,
				MakeEnumCommand::class,
				MakeHelperCommand::class,
				MakeScopeCommand::class,
				MakeTraitCommand::class,
			]);
		}
	}
}
