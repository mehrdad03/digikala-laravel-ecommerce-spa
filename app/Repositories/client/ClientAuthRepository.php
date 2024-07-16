<?php

namespace App\Repositories\client;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ClientAuthRepository implements ClientAuthRepositoryInterface
{
    public function checkUser($gmailUser)
    {

        $existingUser = User::query()->where('email', $gmailUser['email'])->first();

        if (!$existingUser) {
            $newUser = User::query()->updateOrCreate(
                [
                    'email' => $gmailUser['email'],
                ],
                [
                'picture' => $gmailUser['picture'],
                'name' => $gmailUser['name'],
            ]);

            Auth::login($newUser, true);
        } else {

            Auth::login($existingUser, true);
        }

    }

}
