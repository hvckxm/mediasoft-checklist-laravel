<?php

namespace App\Observers;

use App\Models\CheckList;

class CheckListObserver
{
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
}
