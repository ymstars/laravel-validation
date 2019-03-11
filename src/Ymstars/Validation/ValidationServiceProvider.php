<?php

namespace Ymstars\Validation;

use Illuminate\Support\ServiceProvider;
use Ymstars\Validation\Facade\YmstarsValidationFacade;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias('Validation', 'Ymstars\Validation\Facade\YmstarsValidationFacade');
        //
        $this->app->singleton('yms-validation', function ($app) {
            return new Validation();
        });
    }
}
