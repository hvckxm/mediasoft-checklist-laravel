<?php

namespace App\Policies;

use App\Models\CheckList;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
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
     * Determine if checklist can be stored by the user.
     *
     * @param User $user
     * @param $id
     * @return bool
     */
    public function store(User $user, $id): bool
    {
        return $user->access->max_tasks > CheckList::find($id)->tasks()->count();
    }
}
