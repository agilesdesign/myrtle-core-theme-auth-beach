<?php

namespace Myrtle\Themes\Auth\Beach\Theme\Providers;

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
			base_path(). '/vendor/agilesdesign/myrtle-theme-auth-beach/src/public' => public_path(),
		], 'public');
    }
}
