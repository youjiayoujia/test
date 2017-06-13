<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        echo 29;exit;
    }

    public function update(User $user)
    {echo 111;exit;
        return $user->id === 149;
    }
}
