<?php

namespace App\Observers;

use App\Models\Hizmetler;
use Illuminate\Support\Str;

class HizmetObserver
{
    /**
     * Handle the Hizmetler "created" event.
     *
     * @param  \App\Models\Hizmetler  $hizmetler
     * @return void
     */
    public function saving(Hizmetler $hizmetler)
    {
        $hizmetler->slug=Str::slug($hizmetler->title,'-');
    }

    /**
     * Handle the Hizmetler "updated" event.
     *
     * @param  \App\Models\Hizmetler  $hizmetler
     * @return void
     */
    public function updated(Hizmetler $hizmetler)
    {
        //
    }

    /**
     * Handle the Hizmetler "deleted" event.
     *
     * @param  \App\Models\Hizmetler  $hizmetler
     * @return void
     */
    public function deleted(Hizmetler $hizmetler)
    {
        //
    }

    /**
     * Handle the Hizmetler "restored" event.
     *
     * @param  \App\Models\Hizmetler  $hizmetler
     * @return void
     */
    public function restored(Hizmetler $hizmetler)
    {
        //
    }

    /**
     * Handle the Hizmetler "force deleted" event.
     *
     * @param  \App\Models\Hizmetler  $hizmetler
     * @return void
     */
    public function forceDeleted(Hizmetler $hizmetler)
    {
        //
    }
}
