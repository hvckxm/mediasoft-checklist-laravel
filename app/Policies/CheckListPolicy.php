<?php

namespace App\Policies;

use App\Models\CheckList;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CheckListPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Access to create checklist
     *
     * @return bool
     */
    public function store(): bool
    {
         return auth()->user()->access->max_checklists > auth()->user()->checklist()->count();
    }

    /**
     * Access to view checklist
     *
     * @param User $user
     * @param CheckList $checklist
     * @return bool
     */
    public function viewAny(User $user, CheckList $checklist): bool
    {
        return $checklist->user_id == $user->id;
    }
}
