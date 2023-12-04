<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BusinessPartnerPolicy
{
    use HandlesAuthorization;

    public function view(User $user): bool
    {
        if($user->can('view business partners')) {
            return true;
        } else {
            return false;
        }
    }

    public function create(User $user): bool
    {
        if($user->can('create business partners')) {
            return true;
        } else {
            return false;
        }
    }

    public function edit(User $user): bool
    {
        if($user->can('edit business partners')) {
            return true;
        } else {
            return false;
        }
    }

    public function delete(User $user): bool
    {
        if($user->can('delete business partners')) {
            return true;
        } else {
            return false;
        }
    }
}
