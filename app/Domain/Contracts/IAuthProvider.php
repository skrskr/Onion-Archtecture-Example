<?php

namespace App\Domain\Contracts;


interface IAuthProvider
{
    public function getVerifiedPhoneNumber(string $idToken): string;
}
