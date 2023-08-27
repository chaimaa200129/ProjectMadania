<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Events\UserRegistered; // pour importer l'événement UserRegistered

class GoogleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        $user = Socialite::driver('google')->user();

        // Vérifiez si l'utilisateur appartient au domaine institution-madania.com
        if (strpos($user->email, '@institution-madania.com') !== false) {
            // Vérifiez si l'utilisateur existe dans la base de données
            $existingUser = User::where('email', $user->email)->first();

            if ($existingUser) {
                // Connectez l'utilisateur existant
                Auth::login($existingUser);
            } else {
                // Créez un nouvel utilisateur
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    // Autres champs utilisateur si nécessaire
                ]);

                // Émettre l'événement UserRegistered
                event(new UserRegistered($newUser));

                // Connectez le nouvel utilisateur
                Auth::login($newUser);
            }

            return redirect('/home');
        } else {
            // Redirigez l'utilisateur vers une page d'erreur ou affichez un message d'erreur
            return redirect()->route('login')->with('error', 'Seuls les utilisateurs du domaine institution-madania.com sont autorisés.');
        }
    }
}
