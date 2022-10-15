<?php

namespace App\Policies;

use App\Models\User;
use App\Models\TodoItem;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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
     * Can only view
     */
    public function update(\App\User $user, TodoItem $todoItem)
    {
        return $user->id == $todoItem->user_id;
    }
}
