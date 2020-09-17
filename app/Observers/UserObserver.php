<?php

namespace App\Observers;

use App\Admin_users;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function creating(Admin_users $user)
    {
        $user->api_token = bin2hex(openssl_random_pseudo_bytes(30));
    }
}