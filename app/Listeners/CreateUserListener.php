<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;

class CreateUserListener
{
    public function __construct()
    {
        //
    }

    public function handle(UserRegistered $event)
    {
        $user = $event->user;
        
        if (!User::where('email', $user->email)->exists()) {
            User::create([
                'name' => $user->name,
                'email' => $user->email,
//ajoute d'autre champs depend du frontend ofc *anas*
            ]);
        }
    }
}
