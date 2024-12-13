<?php

namespace App\Providers;

use App\Models\GeneralInfo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $generals = GeneralInfo::all();
        View::share('generals', $generals);
    }
}
