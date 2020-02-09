<?php

namespace App\Policies;

use App\User;
use App\Customer;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any customer.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the customer.
     *
     * @param  App\User  $user
     * @param  App\Customer  $customer
     * @return bool
     */
    public function view(User $user, Customer $customer)
    {
        return false;
    }

    /**
     * Determine whether the user can create a customer.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the customer.
     *
     * @param  App\User  $user
     * @param  App\Customer  $customer
     * @return bool
     */
    public function update(User $user, Customer $customer)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the customer.
     *
     * @param  App\User  $user
     * @param  App\Customer  $customer
     * @return bool
     */
    public function delete(User $user, Customer $customer)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the customer.
     *
     * @param  App\User  $user
     * @param  App\Customer  $customer
     * @return bool
     */
    public function restore(User $user, Customer $customer)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the customer.
     *
     * @param  App\User  $user
     * @param  App\Customer  $customer
     * @return bool
     */
    public function forceDelete(User $user, Customer $customer)
    {
        return false;
    }
}
