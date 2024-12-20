<?php

namespace App\Domain\Repositories;


use App\Domain\Models\AccountContract;

interface IAccountRepository
{
    public function getByPhoneNumber(string $phoneNumber): AccountContract;
    public function save(AccountContract $account): void;
    public function isAdmin(string $phoneNumber): bool;
}
