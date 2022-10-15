<?php

namespace App\Policies;

use App\Models\TodoItem;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TodoItemPolicy
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
    public function update(User $user, TodoItem $todoItem)
    {
        return $user->id == $todoItem->user_id;
    }
}
