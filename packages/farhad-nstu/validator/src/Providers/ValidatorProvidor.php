<?php

namespace FarhadNstu\Validator\Providers;

use Illuminate\Support\ServiceProvider;

class ValidatorProvidor extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}