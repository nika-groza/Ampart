<?php

namespace Ampart\BitrixIntegration\Providers;

use Illuminate\Support\ServiceProvider as Provider;
class RootServiceProvider extends Provider
{

    final public function boot(): void
    {
        $this->loadRoutesFrom(dirname(__DIR__) . '/routes/admin.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ampart.bitrix');
    }

    final public function register(): void
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/config/admin-menu.php', 'menu.admin'
        );
    }
}