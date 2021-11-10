<?php

namespace App\Providers;
use Validator;
use \ReCaptcha\ReCaptcha;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
     Validator::extend('recaptcha', function ($attribute, $value, $parameters, $validator) {
    $recaptcha = new ReCaptcha('6LdWWRgdAAAAAJgaSU3lYlGqisK938NyJA1NZa0u');
    $resp = $recaptcha->verify($value, request()->ip());

    return $resp->isSuccess();
});
    }
}
