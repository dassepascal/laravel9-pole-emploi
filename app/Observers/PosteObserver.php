<?php

namespace App\Observers;

use App\Models\Poste;

class PosteObserver
{
    /**
     * Handle the Poste "created" event.
     *
     * @param  \App\Models\Poste  $poste
     * @return void
     */
    public function created(Poste $poste)
    {
        //
    }

    /**
     * Handle the Poste "updated" event.
     *
     * @param  \App\Models\Poste  $poste
     * @return void
     */
    public function updated(Poste $poste)
    {
        //
    }

    /**
     * Handle the Poste "deleted" event.
     *
     * @param  \App\Models\Poste  $poste
     * @return void
     */
    public function deleted(Poste $poste)
    {
        //
    }

    /**
     * Handle the Poste "restored" event.
     *
     * @param  \App\Models\Poste  $poste
     * @return void
     */
    public function restored(Poste $poste)
    {
        //
    }

    /**
     * Handle the Poste "force deleted" event.
     *
     * @param  \App\Models\Poste  $poste
     * @return void
     */
    public function forceDeleted(Poste $poste)
    {
        //
    }
}
