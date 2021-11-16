<?php

namespace App\Observers;

use App\Models\Haber;
use Illuminate\Support\Str;

class HaberObserver
{
    /**
     * Handle the Haber "created" event.
     *
     * @param  \App\Models\Haber  $haber
     * @return void
     */
    public function saving(Haber $haber)
    {
        if ($haber->isactive==0)
        {
            $haber->ispublish=0;
        }
        $haber->slug=Str::slug($haber->menu_name,'-');
    }

    /**
     * Handle the Haber "updated" event.
     *
     * @param  \App\Models\Haber  $haber
     * @return void
     */
    public function updated(Haber $haber)
    {
        //
    }

    /**
     * Handle the Haber "deleted" event.
     *
     * @param  \App\Models\Haber  $haber
     * @return void
     */
    public function deleted(Haber $haber)
    {
        //
    }

    /**
     * Handle the Haber "restored" event.
     *
     * @param  \App\Models\Haber  $haber
     * @return void
     */
    public function restored(Haber $haber)
    {
        //
    }

    /**
     * Handle the Haber "force deleted" event.
     *
     * @param  \App\Models\Haber  $haber
     * @return void
     */
    public function forceDeleted(Haber $haber)
    {
        //
    }
}
