<?php

declare(strict_types = 1);

namespace Test\Show\Providers;

use Illuminate\Support\ServiceProvider;

class ShowDataServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}