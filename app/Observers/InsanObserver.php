<?php

namespace App\Observers;

use App\Models\InsanKaynaklari;
use Illuminate\Support\Str;

class InsanObserver
{
    /**
     * Handle the InsanKaynaklari "created" event.
     *
     * @param  \App\Models\InsanKaynaklari  $insanKaynaklari
     * @return void
     */
    public function saving(InsanKaynaklari $insanKaynaklari)
    {
        if ($insanKaynaklari->isactive==0)
        {
            $insanKaynaklari->ispublish=0;
        }
        $insanKaynaklari->slug=Str::slug($insanKaynaklari->menu_name,'-');
    }

    /**
     * Handle the InsanKaynaklari "updated" event.
     *
     * @param  \App\Models\InsanKaynaklari  $insanKaynaklari
     * @return void
     */
    public function updated(InsanKaynaklari $insanKaynaklari)
    {
        //
    }

    /**
     * Handle the InsanKaynaklari "deleted" event.
     *
     * @param  \App\Models\InsanKaynaklari  $insanKaynaklari
     * @return void
     */
    public function deleted(InsanKaynaklari $insanKaynaklari)
    {
        //
    }

    /**
     * Handle the InsanKaynaklari "restored" event.
     *
     * @param  \App\Models\InsanKaynaklari  $insanKaynaklari
     * @return void
     */
    public function restored(InsanKaynaklari $insanKaynaklari)
    {
        //
    }

    /**
     * Handle the InsanKaynaklari "force deleted" event.
     *
     * @param  \App\Models\InsanKaynaklari  $insanKaynaklari
     * @return void
     */
    public function forceDeleted(InsanKaynaklari $insanKaynaklari)
    {
        //
    }
}
