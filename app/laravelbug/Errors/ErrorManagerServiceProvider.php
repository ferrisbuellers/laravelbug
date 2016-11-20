<?php namespace laravelbug\Errors;

use Illuminate\Support\ServiceProvider;

class ErrorManagerServiceProvider extends ServiceProvider {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('error', function()
        {
            return new ErrorManager;
        });
    }
}