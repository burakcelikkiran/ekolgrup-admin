<?php

namespace App\Observers;

use App\Models\Kalite;
use Illuminate\Support\Str;

class KaliteObserver
{
    /**
     * Handle the Kalite "created" event.
     *
     * @param  \App\Models\Kalite  $kalite
     * @return void
     */
    public function saving(Kalite $kalite)
    {
        if ($kalite->isactive==0)
        {
            $kalite->ispublish=0;
        }
        $kalite->slug=Str::slug($kalite->menu_name,'-');
    }

    /**
     * Handle the Kalite "updated" event.
     *
     * @param  \App\Models\Kalite  $kalite
     * @return void
     */
    public function updated(Kalite $kalite)
    {
        //
    }

    /**
     * Handle the Kalite "deleted" event.
     *
     * @param  \App\Models\Kalite  $kalite
     * @return void
     */
    public function deleted(Kalite $kalite)
    {
        //
    }

    /**
     * Handle the Kalite "restored" event.
     *
     * @param  \App\Models\Kalite  $kalite
     * @return void
     */
    public function restored(Kalite $kalite)
    {
        //
    }

    /**
     * Handle the Kalite "force deleted" event.
     *
     * @param  \App\Models\Kalite  $kalite
     * @return void
     */
    public function forceDeleted(Kalite $kalite)
    {
        //
    }
}
