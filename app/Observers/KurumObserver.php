<?php

namespace App\Observers;

use App\Models\Kurumsal;
use Illuminate\Support\Str;

class KurumObserver
{
    /**
     * Handle the Kurumsal "created" event.
     *
     * @param  \App\Models\Kurumsal  $kurumsal
     * @return void
     */
    public function saving(Kurumsal $kurumsal)
    {
        if ($kurumsal->isactive==0)
        {
            $kurumsal->ispublish=0;
        }
        $kurumsal->slug=Str::slug($kurumsal->menu_name,'-');
    }

    /**
     * Handle the Kurumsal "updated" event.
     *
     * @param  \App\Models\Kurumsal  $kurumsal
     * @return void
     */
    public function updated(Kurumsal $kurumsal)
    {
        //
    }

    /**
     * Handle the Kurumsal "deleted" event.
     *
     * @param  \App\Models\Kurumsal  $kurumsal
     * @return void
     */
    public function deleted(Kurumsal $kurumsal)
    {
        //
    }

    /**
     * Handle the Kurumsal "restored" event.
     *
     * @param  \App\Models\Kurumsal  $kurumsal
     * @return void
     */
    public function restored(Kurumsal $kurumsal)
    {
        //
    }

    /**
     * Handle the Kurumsal "force deleted" event.
     *
     * @param  \App\Models\Kurumsal  $kurumsal
     * @return void
     */
    public function forceDeleted(Kurumsal $kurumsal)
    {
        //
    }
}
