<?php

namespace App\Domain\Repositories;


use App\Domain\Models\Account;


interface IAccountRepository
{
    public function getByPhoneNumber(string $phoneNumber): Account;
    public function save(Account $account): void;
    public function isAdmin(string $phoneNumber): bool;
}
