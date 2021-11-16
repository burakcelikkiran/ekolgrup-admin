<?php

namespace App\Providers;


use App\Models\Haber;
use App\Models\Hizmetler;
use App\Models\InsanKaynaklari;
use App\Models\Kalite;
use App\Models\Kurumsal;
use App\Models\Page;

use App\Observers\HaberObserver;
use App\Observers\HizmetObserver;
use App\Observers\InsanObserver;
use App\Observers\KaliteObserver;
use App\Observers\KurumObserver;
use App\Observers\PageObserver;
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
        Kurumsal::observe(KurumObserver::class);
        Haber::observe(HaberObserver::class);
        InsanKaynaklari::observe(InsanObserver::class);
        Page::observe(PageObserver::class);
        Hizmetler::observe(HizmetObserver::class);
        Kalite::observe(KaliteObserver::class);
    }
}
