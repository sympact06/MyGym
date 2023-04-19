<?php

namespace App\Policies;

use App\Models\sessies;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class sessiesPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, sessies $sessies): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, sessies $sessies): bool
    {
    }

    public function delete(User $user, sessies $sessies): bool
    {
    }

    public function restore(User $user, sessies $sessies): bool
    {
    }

    public function forceDelete(User $user, sessies $sessies): bool
    {
    }
}
