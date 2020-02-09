<?php

namespace App\Policies;

use App\User;
use App\Picture;
use Illuminate\Auth\Access\HandlesAuthorization;

class PicturePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any picture.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the picture.
     *
     * @param  App\User  $user
     * @param  App\Picture  $picture
     * @return bool
     */
    public function view(User $user, Picture $picture)
    {
        return false;
    }

    /**
     * Determine whether the user can create a picture.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the picture.
     *
     * @param  App\User  $user
     * @param  App\Picture  $picture
     * @return bool
     */
    public function update(User $user, Picture $picture)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the picture.
     *
     * @param  App\User  $user
     * @param  App\Picture  $picture
     * @return bool
     */
    public function delete(User $user, Picture $picture)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the picture.
     *
     * @param  App\User  $user
     * @param  App\Picture  $picture
     * @return bool
     */
    public function restore(User $user, Picture $picture)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the picture.
     *
     * @param  App\User  $user
     * @param  App\Picture  $picture
     * @return bool
     */
    public function forceDelete(User $user, Picture $picture)
    {
        return false;
    }
}
