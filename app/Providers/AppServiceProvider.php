<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::directive('format_angka', function ($expression) {
            return "<?= number_format($expression, 0, ',', '.');?>";
        });

        Blade::directive('format_persen', function ($expression) {
            return "<?= number_format($expression, 2, ',', '.');?>";
        });
    }
}
