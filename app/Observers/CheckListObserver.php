<?php

namespace App\Observers;

use App\Models\CheckList;

class CheckListObserver
{
    /**
     * Handle the CheckList "created" event.
     *
     * @param CheckList $checkList
     * @return void
     */
    public function created(CheckList $checkList)
    {
        //
    }

    /**
     * Handle the CheckList "updated" event.
     *
     * @param CheckList $checkList
     * @return void
     */
    public function updated(CheckList $checkList)
    {
        //
    }

    /**
     * Handle the CheckList "deleted" event.
     *
     * @param CheckList $checkList
     * @return void
     */
    public function deleted(CheckList $checkList)
    {
        $checkList->tasks()->delete();
    }

    /**
     * Handle the CheckList "restored" event.
     *
     * @param CheckList $checkList
     * @return void
     */
    public function restored(CheckList $checkList)
    {
        //
    }

    /**
     * Handle the CheckList "force deleted" event.
     *
     * @param CheckList $checkList
     * @return void
     */
    public function forceDeleted(CheckList $checkList)
    {
        //
    }
}
