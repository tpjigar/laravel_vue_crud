<?php

namespace App\Policies;

use App\User;
use App\Phone;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhonePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any phone.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the phone.
     *
     * @param  App\User  $user
     * @param  App\Phone  $phone
     * @return bool
     */
    public function view(User $user, Phone $phone)
    {
        return false;
    }

    /**
     * Determine whether the user can create a phone.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the phone.
     *
     * @param  App\User  $user
     * @param  App\Phone  $phone
     * @return bool
     */
    public function update(User $user, Phone $phone)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the phone.
     *
     * @param  App\User  $user
     * @param  App\Phone  $phone
     * @return bool
     */
    public function delete(User $user, Phone $phone)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the phone.
     *
     * @param  App\User  $user
     * @param  App\Phone  $phone
     * @return bool
     */
    public function restore(User $user, Phone $phone)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the phone.
     *
     * @param  App\User  $user
     * @param  App\Phone  $phone
     * @return bool
     */
    public function forceDelete(User $user, Phone $phone)
    {
        return false;
    }
}
