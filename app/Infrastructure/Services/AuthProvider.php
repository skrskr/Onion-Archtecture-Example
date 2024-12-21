<?php

namespace App\Infrastructure\Services;

use App\Domain\Contracts\IAuthProvider;

class AuthProvider implements IAuthProvider
{
    public function getVerifiedPhoneNumber(string $idToken): string
    {
        return "0123456789";
    }
}
