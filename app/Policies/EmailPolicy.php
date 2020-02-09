<?php

namespace App\Policies;

use App\User;
use App\Email;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmailPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any email.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the email.
     *
     * @param  App\User  $user
     * @param  App\Email  $email
     * @return bool
     */
    public function view(User $user, Email $email)
    {
        return false;
    }

    /**
     * Determine whether the user can create a email.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the email.
     *
     * @param  App\User  $user
     * @param  App\Email  $email
     * @return bool
     */
    public function update(User $user, Email $email)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the email.
     *
     * @param  App\User  $user
     * @param  App\Email  $email
     * @return bool
     */
    public function delete(User $user, Email $email)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the email.
     *
     * @param  App\User  $user
     * @param  App\Email  $email
     * @return bool
     */
    public function restore(User $user, Email $email)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the email.
     *
     * @param  App\User  $user
     * @param  App\Email  $email
     * @return bool
     */
    public function forceDelete(User $user, Email $email)
    {
        return false;
    }
}
