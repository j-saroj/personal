<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Profile;
use App\Models\Service;
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
        View::composer(['layouts.main','admin.layout.admin-topbar'], function ($view) {
            $view->with([
                'services' => Service::all(),
                'profile' => Profile::first(),
            ]);
        });
    }
}
