<?php

namespace App\Policies;

use App\RequestDoc;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class RequestDocPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->office_id == 4;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\RequestDoc  $requestDoc
     * @return mixed
     */
    public function view(User $user, RequestDoc $requestDoc)
    {
        // return auth()->user()->office_id == 4;
        return $requestDoc->office_id == $user->office_id;
    }

    // public function view()
    // {
    //     // return auth()->user()->office_id == 4;
    //     // if(auth()->user()->office_id != 4)
    //     // {
    //     //     return true;
    //     // }
    //     // return true;
    // }
    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return auth()->user()->office_id == 4;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\RequestDoc  $requestDoc
     * @return mixed
     */
    public function update(User $user, RequestDoc $requestDoc)
    {
        return $requestDoc->office_id == $user->office_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\RequestDoc  $requestDoc
     * @return mixed
     */
    public function delete(User $user, RequestDoc $requestDoc)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\RequestDoc  $requestDoc
     * @return mixed
     */
    public function restore(User $user, RequestDoc $requestDoc)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\RequestDoc  $requestDoc
     * @return mixed
     */
    public function forceDelete(User $user, RequestDoc $requestDoc)
    {
        //
    }
}
