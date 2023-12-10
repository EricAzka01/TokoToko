<?php

namespace App\Policies;

use App\Models\Buyer;
use App\Models\Cart;
use Illuminate\Auth\Access\Response;

class CartPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Buyer $buyer): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Buyer $buyer, Cart $cart): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Buyer $buyer): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Buyer $buyer, Cart $cart): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Buyer $buyer, Cart $cart): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Buyer $buyer, Cart $cart): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Buyer $buyer, Cart $cart): bool
    {
        //
    }
}
