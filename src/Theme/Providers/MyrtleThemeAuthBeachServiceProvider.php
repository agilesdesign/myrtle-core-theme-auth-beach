<?php

namespace Myrtle\Core\Themes\Auth\Beach\Theme\Providers;

use Illuminate\Support\ServiceProvider;

class MyrtleThemeAuthBeachServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->publishes([
			base_path(). '/vendor/agilesdesign/myrtle-core-theme-auth-beach/src/public' => public_path(),
		], 'public');
    }
}
