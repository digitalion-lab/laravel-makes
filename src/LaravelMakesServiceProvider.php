<?php

namespace Digitalion\LaravelMakes;

use Digitalion\LaravelMakes\Commands\MakeClassCommand;
use Digitalion\LaravelMakes\Commands\MakeEnumCommand;
use Digitalion\LaravelMakes\Commands\MakeHelperCommand;
use Digitalion\LaravelMakes\Commands\MakeScopeCommand;
use Digitalion\LaravelMakes\Commands\MakeTraitCommand;
use Illuminate\Support\ServiceProvider;

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

			$stubs = [];
			$path_stubs = base_path('stubs');
			if (file_exists($path_stubs) && is_dir($path_stubs)) {
				$scan_files = scandir($path_stubs);
				$files_stubs = array_diff($scan_files, array('.', '..'));
				foreach ($files_stubs as $file) {
					$file_ext = pathinfo($file, PATHINFO_EXTENSION);
					if ($file_ext == 'stub') {
						$from = __DIR__ . '/../stubs/' . $file;
						$to = base_path('stubs/' . $file);
						$stubs[$from] = $to;
					}
				}
			}

			if (!empty($stubs)) {
				$this->publishes($stubs, 'laravel-makes-stubs');
			}

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
